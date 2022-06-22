<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Support\Str;
use App\Models\Instansi;
use Illuminate\Support\Facades\DB;
use App\Models\Kantin;
use App\Models\tbl_siswa;
use App\Models\RiwayatSaldo;

class PencairanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }

    public function Pencairan(Request $request)
    {
        if (auth()->user()->role != 'INSTANSI') {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }


        $reqs = $request->all();
        $userCairan = null;
        $usCair = User::where(['qr_code' => $reqs["qr"], "pin" => $reqs["pin"], "kode_instansi" => auth()->user()->kode_instansi])->count();
        if ($usCair > 0 && $usCair == 1) {
            $userCairan = User::where(['qr_code' => $reqs["qr"], "pin" => $reqs["pin"], "kode_instansi" => auth()->user()->kode_instansi])->first();
            $userData = $this->getUserJoin($userCairan->id);
        }

        if (empty($userCairan)) {
            return response()->json(['msg' => 'user tidak di temukan', "status"  => false], 401);
        }

        $requests = [
            "id_instansi" => auth()->user()->kode_instansi,
            "id_pencair"  => auth()->user()->id,
            "id_penarik"  => $userCairan->id,
            "saldo"       => auth()->user()->saldo,
            "saldo_user"       => $userCairan->saldo,
            "jumlahCairan" => $reqs['jumlah']
        ];

        if ((float) $requests['saldo_user'] < (float) $requests['jumlahCairan']) {
            return response()->json(['msg' => 'jumlah saldo kurang dari jumlah penarikan ' . $requests['saldo_user'], "status" => false], 401);
        }

        $userInstansi = Instansi::where('kode_instansi', auth()->user()->kode_instansi)->first();

        $saldotunai = (float) $userInstansi->saldo_tunai - (float) $requests['jumlahCairan'];
        $saldoUser   = (float) $userCairan->saldo -  (float) $requests['jumlahCairan'];

        $saldoPencairan = [
            "id_user" => $userCairan->id,
            "kode_instansi" => auth()->user()->kode_instansi,
            "tanggal" => date('Y-m-d'),
            "aksi" => "pencairan",
            "pesan" => "admin mencairkan dana " . $userData->nama_user . " sebesar " . $reqs['jumlah'],
            "oleh" => auth()->user()->id,
            "saldo_awal" => $userCairan->saldo,
            "saldo" => $saldoUser,
            "jumlah_aksi" => $requests['jumlahCairan'],
            "jenis_saldo" => "Digital"
        ];

        $saldoTunaiInstansi = [
            "id_user" => $userInstansi->user_id,
            "kode_instansi" => auth()->user()->kode_instansi,
            "tanggal" => date('Y-m-d'),
            "aksi" => "pencairan",
            "pesan" => "pengurangan saldo tunai untuk pencairan dana kepada user " . $userData->nama_user,
            "oleh" => auth()->user()->id,
            "saldo_awal" => $userInstansi->saldo_tunai,
            "saldo" =>  $saldotunai,
            "jumlah_aksi" => $requests['jumlahCairan'],
            "jenis_saldo" => $reqs['jenis_saldo']
        ];

        $userP = User::where('id', $userCairan->id)->update([
            "saldo" => $saldoUser,
        ]);
        if ($reqs['jenis_saldo'] == "TUNAI") {
            $ins = Instansi::where('kode_instansi', auth()->user()->kode_instansi)->update([
                "saldo_tunai" => $saldotunai,
            ]);
        }
        if ($userP == true && $ins == true) {
            $rUs = RiwayatSaldo::create($saldoPencairan);
            RiwayatSaldo::create($saldoTunaiInstansi);
        } else {
            $userP = User::where('id', $userCairan->id)->update([
                "saldo" => $saldoPencairan['saldo_awal'],
            ]);
            if ($reqs['jenis_saldo'] == "TUNAI") {
                $ins = Instansi::where('kode_instansi', auth()->user()->kode_instansi)->update([
                    "saldo_tunai" => $saldoTunaiInstansi['saldo_awal'],
                ]);
            }

            return response()->json(['msg' => 'pencairan gagal , pastikan jaringan anda stabil ', "status" => false], 401);
        }
        return response()->json([
            'message' => 'pencairan berhasil',
            'status'  => true,
            "response" => [
                "user" => $this->getUserJoin($userCairan->id),
                "dataTransaksi" => $saldoPencairan,
                "riwayat" => $rUs
            ]
        ]);
    }


    public function getUserJoin($id_user)
    {
        $cek = User::where('id', $id_user)->first();
        switch ($cek->name_table_join) {
            case 'kantin':
                $get = DB::table('users')
                    ->select(['*', 'kantin.nama_kantin as nama_user', 'kantin.alamat_pemilik as alamat_user'])
                    ->join('kantin', function ($join) {
                        $join->on('kantin.user_id', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();
                return $get;
                break;

            case 'siswa':
                $get = DB::table('users')
                    ->select(['*', 'tbl_siswa.nama_siswa as nama_user', 'tbl_siswa.alamat as alamat_user'])
                    ->join('tbl_siswa', function ($join) {
                        $join->on('tbl_siswa.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();
                return $get;
                break;
            case 'staff':
                $get = DB::table('users')
                    ->select(['*', 'tbl_siswa.nama_siswa as nama_user', 'tbl_siswa.alamat as alamat_user'])
                    ->join('staff', function ($join) {
                        $join->on('staff.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();
                return $get;
                break;
            default:
                $users = User::where('id', $id_user)->first();
                return $users;
                break;
        }
    }
}
