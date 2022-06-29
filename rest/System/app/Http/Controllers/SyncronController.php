<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\{Absensi, User, PengaturanInstansi, Hari, Instansi, Siswa};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Validator;

// bikin random
use Illuminate\Support\Str;
// Str::random(40);

class SyncronController extends Controller
{
    private $serverUrl = "";
    private $key = "";
    public function __construct()
    {
        $instansi = Instansi::first();
        $this->serverUrl = env('SERVER_URL');
        $this->key = $instansi->lisensi;
    }

    public function syncronus()
    {
        $getAbs = Absensi::where('sync', false)->with('siswa', 'pengaturanInstansi')->get();
        $getPengaturanInstansi = PengaturanInstansi::where('sync', false)->get();
        $response = Http::post($this->serverUrl . "sync/push-absen", [
            'key' => $this->key,
            "ip" => request()->ip(),
            'data' => $getAbs,
            "pengaturan" => $getPengaturanInstansi
        ]);
        if ($response->status() == 200) {
            $result = json_decode($response->body(), true);
            foreach ($result['absen']['success'] as  $success) {
                Absensi::where('session_id', $success['session_id'])->update([
                    "sync" => true
                ]);
            }
            foreach ($result['pengaturan']['success'] as $v) {
                PengaturanInstansi::where('session_id', $v['session_id'])->update([
                    "sync" => true
                ]);
            }
        }
        return response()->json(json_decode($response->body()));
    }

    public function syncData(){
        $response = Http::post($this->serverUrl . "sync/syncron-data", [
            'key' => $this->key
        ]);

        $syncUser = [];
        $syncSiswa = [];
        if ($response->status() == 200){
            $result = json_decode($response->body(), true);
            foreach ($result['user'] as  $newUser){
                $user = User::where('username', $newUser['username'])->first();
                if($user){
                    $user->id = $newUser['id'];
                    $user->kode_instansi = $newUser['kode_instansi'];
                    $user->email = $newUser['email'];
                    $user->username = $newUser['username'];
                    $user->pin = $newUser['pin'];
                    $user->qr_code = $newUser['qr_code'];
                    $user->email_verified_at = $newUser['email_verified_at'];
                    $user->password = $newUser['password'];
                    $user->role = $newUser['role'];
                    $user->route = $newUser['route'];
                    $user->remember_token = $newUser['kode_instansi'];
                    $user->status_user = $newUser['status_user'];
                    $user->user_join = $newUser['user_join'];
                    $user->name_table_join = $newUser['name_table_join'];
                    $user->saldo = $newUser['saldo'];
                    $user->foto = $newUser['foto'];
                    if($user->isDirty()){
                        $user->save();
                        array_push($syncUser, $user);
                    }
                }
                else{
                    $insUser = User::create([
                        'id' => $newUser['id'],
                        'kode_instansi' => $newUser['kode_instansi'],
                        'email' => $newUser['email'],
                        'username' => $newUser['username'],
                        'pin' => $newUser['pin'],
                        'qr_code' => $newUser['qr_code'],
                        'email_verified_at' => $newUser['email_verified_at'],
                        'password' => $newUser['password'],
                        'role' => $newUser['role'],
                        'route' => $newUser['route'],
                        'remember_token' => $newUser['remember_token'],
                        'status_user' => $newUser['status_user'],
                        'user_join' => $newUser['user_join'],
                        'name_table_join' => $newUser['name_table_join'],
                        'saldo' => $newUser['saldo'],
                        'foto' => $newUser['foto']
                    ]);
                    array_push($syncUser, $insUser);
                }
            }
            
            foreach ($result['siswa'] as  $newSiswa){
                $siswa = Siswa::where('nis', $newSiswa['nis'])->first();
                if($siswa){
                    $siswa->nis = $newSiswa['nis'];
                    $siswa->kode_instansi = $newSiswa['kode_instansi'];
                    $siswa->id_user = $newSiswa['id_user'];
                    $siswa->nama_siswa = $newSiswa['nama_siswa'];
                    $siswa->jk = $newSiswa['jk'];
                    $siswa->tgl_lahir = $newSiswa['tgl_lahir'];
                    $siswa->alamat = $newSiswa['alamat'];
                    $siswa->provinsi = $newSiswa['provinsi'];
                    $siswa->kabupaten = $newSiswa['kabupaten'];
                    $siswa->kecamatan = $newSiswa['kecamatan'];
                    $siswa->agama = $newSiswa['agama'];
                    $siswa->tahun_masuk = $newSiswa['tahun_masuk'];
                    $siswa->kelas = $newSiswa['kelas'];

                    if($siswa->isDirty()){
                        $siswa->save();
                        array_push($syncSiswa, $siswa);
                    }
                }
                else{
                    $insSiswa = Siswa::create([
                        'nis' => $newSiswa['nis'],
                        'kode_instansi' => $newSiswa['kode_instansi'],
                        'id_user' => $newSiswa['id_user'],
                        'nama_siswa' => $newSiswa['nama_siswa'],
                        'jk' => $newSiswa['jk'],
                        'tgl_lahir' => $newSiswa['tgl_lahir'],
                        'alamat' => $newSiswa['alamat'],
                        'provinsi' => $newSiswa['provinsi'],
                        'kabupaten' => $newSiswa['kabupaten'],
                        'kecamatan' => $newSiswa['kecamatan'],
                        'agama' => $newSiswa['agama'],
                        'tahun_masuk' => $newSiswa['tahun_masuk'],
                        'kelas' => $newSiswa['kelas'],
                    ]);
                    array_push($syncSiswa, $insSiswa);
                }
            }
        }
        return response()->json(["user" => $syncUser, "siswa" => $syncSiswa], 200);
    }

    public function importdata(Request $request){
        $req = $request->all();

        $validator = Validator::make($req, [
            "secret" => "required|string"
        ]);

        $response = Http::post($this->serverUrl . "sync/import-data", [
            'secret' => $req['secret']
        ]);

        $result = [];
        if ($response->status() == 200){
            $data = json_decode($response->body(), true);
            foreach($data['instansi'] as $instansi){
                array_push($result, $instansi);
            }
            foreach($data['siswa'] as $siswa){
                array_push($result, $siswa);
            }
            foreach($data['staff'] as $staff){
                array_push($result, $staff);
            }
        }

        return response()->json(["status" => true, "response" => $result, "msg" => "data berhasil di import"], 200);
    }
}
