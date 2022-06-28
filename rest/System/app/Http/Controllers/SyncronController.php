<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\{Absensi, User, PengaturanInstansi, Hari, Instansi, Siswa};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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
        $username = User::pluck('username')->all();
        $nis = Siswa::pluck('nis')->all();

        $response = Http::post($this->serverUrl . "sync/get-data", [
            'key' => $this->key,
            'username' => $username,
            'nis' => $nis
        ]);

        $syncUser = [];
        $syncSiswa = [];
        if ($response->status() == 200){
            $result = json_decode($response->body(), true);
            foreach ($result['newUser'] as  $newUser){
                $insUser = User::create([
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
            foreach ($result['allUser'] as $val){
                $updateUser = User::where('username', $val['username'])->first();
                $updateUser->kode_instansi = $val['kode_instansi'];
                $updateUser->email = $val['email'];
                $updateUser->username = $val['username'];
                $updateUser->pin = $val['pin'];
                $updateUser->qr_code = $val['qr_code'];
                $updateUser->email_verified_at = $val['email_verified_at'];
                $updateUser->password = $val['password'];
                $updateUser->role = $val['role'];
                $updateUser->route = $val['route'];
                $updateUser->remember_token = $val['kode_instansi'];
                $updateUser->status_user = $val['status_user'];
                $updateUser->user_join = $val['user_join'];
                $updateUser->name_table_join = $val['name_table_join'];
                $updateUser->saldo = $val['saldo'];
                $updateUser->foto = $val['foto'];

                if($updateUser->isDirty()){
                    $updateUser->save();
                    array_push($syncUser, $updateUser);
                }
            }
            foreach ($result['newSiswa'] as  $newSiswa){
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
            foreach ($result['allSiswa'] as $v){
                $updateSiswa = Siswa::where('nis', $v['nis'])->first();
                $updateSiswa->nis = $v['nis'];
                $updateSiswa->kode_instansi = $v['kode_instansi'];
                $updateSiswa->id_user = $v['id_user'];
                $updateSiswa->nama_siswa = $v['nama_siswa'];
                $updateSiswa->jk = $v['jk'];
                $updateSiswa->tgl_lahir = $v['tgl_lahir'];
                $updateSiswa->alamat = $v['alamat'];
                $updateSiswa->provinsi = $v['provinsi'];
                $updateSiswa->kabupaten = $v['kabupaten'];
                $updateSiswa->kecamatan = $v['kecamatan'];
                $updateSiswa->agama = $v['agama'];
                $updateSiswa->tahun_masuk = $v['tahun_masuk'];
                $updateSiswa->kelas = $v['kelas'];

                if($updateSiswa->isDirty()){
                    $updateSiswa->save();
                    array_push($syncSiswa, $updateSiswa);
                }
            }
        }
        return response()->json(["user" => $syncUser, "siswa" => $syncSiswa], 200);
    }
}
