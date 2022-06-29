<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\{Absensi, User, PengaturanInstansi, Hari, Instansi, Siswa};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Validator;
use App\Models\Staff;

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
        if ($instansi) {
            $this->key = $instansi->lisensi;
        }
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

    public function syncData()
    {
        $response = Http::post($this->serverUrl . "sync/syncron-data", [
            'key' => $this->key
        ]);

        $syncUser = [];
        $syncSiswa = [];
        if ($response->status() == 200) {
            $result = json_decode($response->body(), true);
            foreach ($result['user'] as  $newUser) {
                $user = User::where('username', $newUser['username'])->first();
                if ($user) {
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
                    if ($user->isDirty()) {
                        $user->save();
                        array_push($syncUser, $user);
                    }
                } else {
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

            foreach ($result['siswa'] as  $newSiswa) {
                $siswa = Siswa::where('nis', $newSiswa['nis'])->first();
                if ($siswa) {
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

                    if ($siswa->isDirty()) {
                        $siswa->save();
                        array_push($syncSiswa, $siswa);
                    }
                } else {
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

    public function importdata(Request $request, $selected)
    {
        $req = $request->all();

        $validator = Validator::make($req, [
            "secret" => "required|string"
        ]);

        $response = Http::post($this->serverUrl . "sync/import-data", [
            'secret' => $req['secret']
        ]);

        if ($response->status() == 200) {
            $data = json_decode($response->body(), true);
            switch ($selected) {
                case 'instansi':
                    return response()->json($this->importdataInstansi($data), 200);
                    break;
                case 'siswa':
                    return response()->json($this->importdataSiswa($data), 200);

                    break;
                case 'staff':
                    return response()->json($this->importdataStaff($data), 200);
                    break;
                default:
                    return response()->json(["message" => "Data tidak ditemukan"], 404);
                    break;
            }
        }
    }
    public function importdataInstansi($data)
    {
        try {
            $instansi = $data['instansi'];
            $addInstansi = new Instansi;
            $addInstansi->kode_instansi = $instansi['kode_instansi'];
            $addInstansi->user_id = $instansi['user_id'];
            $addInstansi->user_pimpinan = $instansi['user_pimpinan'];
            $addInstansi->nama_instansi = $instansi['nama_instansi'];
            $addInstansi->email_instansi = $instansi['email_instansi'];
            $addInstansi->alamat = $instansi['alamat'];
            $addInstansi->provinsi = $instansi['provinsi'];
            $addInstansi->kabupaten = $instansi['kabupaten'];
            $addInstansi->kecamatan = $instansi['kecamatan'];
            $addInstansi->about = $instansi['about'];
            $addInstansi->visi = $instansi['visi'];
            $addInstansi->misi = $instansi['kode_instansi'];
            $addInstansi->frame_koordinat = $instansi['frame_koordinat'];
            $addInstansi->image = $instansi['image'];
            $addInstansi->video = $instansi['video'];
            $addInstansi->galery = $instansi['galery'];
            $addInstansi->package_module = $instansi['package_module'];
            $addInstansi->saldo_tunai = $instansi['saldo_tunai'];
            $addInstansi->saldo_bank = $instansi['saldo_bank'];
            $addInstansi->saldo_payment = $instansi['saldo_payment'];
            $addInstansi->kas_sekolah = $instansi['kas_sekolah'];
            $addInstansi->lisensi = $instansi['user']['remember_token'];
            $Isave = $addInstansi->save();
            if (!$Isave) {
                return ["status" => false, "msg" => "failed to save data"];
            }
            // user instasi
            $addUser = new User;
            $addUser->id = $instansi['user']['id'];
            $addUser->kode_instansi = $instansi['user']['kode_instansi'];
            $addUser->email = $instansi['user']['email'];
            $addUser->username = $instansi['user']['username'];
            $addUser->pin = $instansi['user']['pin'];
            $addUser->qr_code = $instansi['user']['qr_code'];
            $addUser->password = $instansi['user']['password'];
            $addUser->role = $instansi['user']['role'];
            $addUser->route = $instansi['user']['route'];
            $addUser->remember_token = $instansi['user']['remember_token'];
            $addUser->status_user = $instansi['user']['status_user'];
            $addUser->user_join = $instansi['user']['user_join'];
            $addUser->name_table_join = $instansi['user']['name_table_join'];
            $addUser->saldo = $instansi['user']['saldo'];
            $addUser->foto = $instansi['user']['foto'];
            $saves =  $addUser->save();
            if (!$saves) {
                Instansi::where('kode_instansi', $instansi['kode_instansi'])->delete();
                return ["status" => false, "msg" => "failed to save data"];
            }
            return ["status" => true, "response" => $instansi, "msg" => "success to save data"];
        } catch (\Throwable $th) {
            return ["status" => false, "msg" => "server error", "error" => $th];
        }
    }
    public function importdataSiswa($data)
    {
        try {
            $success = [];
            $error = [];
            foreach ($data['siswa'] as $siswa) {
                if (!empty($siswa['user']['id'])) {
                    // ------------------------------------------------
                    $addSiswa = new Siswa;
                    $addSiswa->nis = $siswa['nis'];
                    $addSiswa->kode_instansi = $siswa['kode_instansi'];
                    $addSiswa->id_user = $siswa['id_user'];
                    $addSiswa->nama_siswa = $siswa['nama_siswa'];
                    $addSiswa->jk = $siswa['jk'];
                    $addSiswa->tgl_lahir = $siswa['tgl_lahir'];
                    $addSiswa->alamat = $siswa['alamat'];
                    $addSiswa->provinsi = $siswa['provinsi'];
                    $addSiswa->kabupaten = $siswa['kabupaten'];
                    $addSiswa->kecamatan = $siswa['kecamatan'];
                    $addSiswa->agama = $siswa['agama'];
                    $addSiswa->tahun_masuk = $siswa['tahun_masuk'];
                    $addSiswa->kelas = $siswa['kelas'];
                    $s = $addSiswa->save();

                    if ($s) {
                        array_push($success, $addSiswa);
                    } else {
                        array_push($error, $addSiswa);
                    }

                    // -------------------------------------------------------
                    $addUser = new User;
                    $addUser->id = $siswa['user']['id'];
                    $addUser->kode_instansi = $siswa['user']['kode_instansi'];
                    $addUser->email = $siswa['user']['email'];
                    $addUser->username = $siswa['user']['username'];
                    $addUser->pin = $siswa['user']['pin'];
                    $addUser->qr_code = $siswa['user']['qr_code'];
                    $addUser->password = $siswa['user']['password'];
                    $addUser->role = $siswa['user']['role'];
                    $addUser->route = $siswa['user']['route'];
                    $addUser->remember_token = $siswa['user']['remember_token'];
                    $addUser->status_user = $siswa['user']['status_user'];
                    $addUser->user_join = $siswa['user']['user_join'];
                    $addUser->name_table_join = $siswa['user']['name_table_join'];
                    $addUser->saldo = $siswa['user']['saldo'];
                    $addUser->foto = $siswa['user']['foto'];
                    $uS = $addUser->save();
                    if ($uS) {
                        array_push($success, $uS);
                    } else {
                        array_push($error, $uS);
                    }
                }
            }
            return ["status" => true, "response" => ["success" => $success, "error" => $error], "msg" => "success to save data"];
        } catch (\Throwable $th) {
            return ["status" => false, "msg" => "server error", "error" => $th];
        }
    }
    public function importdataStaff($data)
    {

        try {
            $success = [];
            $error = [];
            foreach ($data['staff'] as $staff) {

                if (!empty($staff['id_staf']) && !empty($staff['user']['id'])) {
                    // --------------------------------------------------
                    $addStaff = new Staff;
                    $addStaff->id_staf = $staff['id_staf'];
                    $addStaff->id_user = $staff['id_user'];
                    $addStaff->nik = $staff['nik'];
                    $addStaff->kode_instansi = $staff['kode_instansi'];
                    $addStaff->nama_lengkap = $staff['nama_lengkap'];
                    $addStaff->nip = $staff['nip'];
                    $addStaff->tmp_lahir = $staff['tmp_lahir'];
                    $addStaff->tgl_lahir = $staff['tgl_lahir'];
                    $addStaff->jenis_kelamin = $staff['jenis_kelamin'];
                    $addStaff->agama = $staff['agama'];
                    $addStaff->alamat_rumah = $staff['alamat_rumah'];
                    $addStaff->telepon = $staff['telepon'];
                    $addStaff->id_jabatan = $staff['id_jabatan'];
                    $addStaff->tgl_masuk = $staff['tgl_masuk'];
                    $addStaff->unit_konsentrasi = $staff['unit_konsentrasi'];
                    $addStaff->status_guru = $staff['status_guru'];
                    $addStaff->status_mengajar = $staff['status_mengajar'];
                    $addStaff->status_pns = $staff['status_pns'];
                    $addStaff->status_staff = $staff['status_staff'];
                    $addStaff->table_relation = $staff['table_relation'];
                    $addStaff->id_relation = $staff['id_relation'];
                    $st =  $addStaff->save();
                    if ($st) {
                        array_push($success, $addStaff);
                    } else {
                        array_push($error, $addStaff);
                    }
                    // -------------------------------------------------------
                    $addUser = new User;
                    $addUser->id = $staff['user']['id'];
                    $addUser->kode_instansi = $staff['user']['kode_instansi'];
                    $addUser->email = $staff['user']['email'];
                    $addUser->username = $staff['user']['username'];
                    $addUser->pin = $staff['user']['pin'];
                    $addUser->qr_code = $staff['user']['qr_code'];
                    $addUser->password = $staff['user']['password'];
                    $addUser->role = $staff['user']['role'];
                    $addUser->route = $staff['user']['route'];
                    $addUser->remember_token = $staff['user']['remember_token'];
                    $addUser->status_user = $staff['user']['status_user'];
                    $addUser->user_join = $staff['user']['user_join'];
                    $addUser->name_table_join = $staff['user']['name_table_join'];
                    $addUser->saldo = $staff['user']['saldo'];
                    $addUser->foto = $staff['user']['foto'];
                    $stE = $addUser->save();
                    if ($st) {
                        array_push($success, $stE);
                    } else {
                        array_push($error,  $addUser);
                    }
                }
            }
            return ["status" => true, "response" => ["success" => $success, "error" => $error], "msg" => "success to save data"];
        } catch (\Throwable $th) {
            return ["status" => false, "msg" => "server error", "error" => $th];
        }
    }
}
