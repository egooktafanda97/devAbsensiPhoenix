<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;
use Illuminate\Support\Str;
use App\Models\Instansi;
use Illuminate\Support\Facades\DB;
use App\Models\Kantin;
use App\Models\tbl_siswa;
use App\Models\RiwayatSaldo;
use App\Models\RepairBug;


class UnitDebugController extends Controller
{
    public function pengembalianDana(Request $request)
    {
        $reqs = $request->all();

        if (RiwayatSaldo::where(["id_user" => $reqs['id_user'], "aksi" => "pengembalian_saldo", "kode_request" => $reqs['random_code']])->count() > 0) {
            return response()->json([
                'status' => 'error',
                'message' => 'request already exist'
            ]);
        }
        if (RiwayatSaldo::where(["id_user" => $reqs['id_user'], "aksi" => "pengembalian_saldo"])->count() > 0) {
            return response()->json([
                'status' => 'error',
                'message' => 'request already exist'
            ]);
        } else if (!empty($reqs['tambahan']) && $reqs['tambahan'] == 0 || $reqs['random_code'] == '') {
            return response()->json([
                'status' => 'error',
                'message' => 'tambahan tidak boleh 0'
            ]);
        } else {
            $saldo_awal = User::where('id', $reqs['id_user'])->first()->saldo;
            $tambahan = (float) User::where('id', $reqs['id_user'])->first()->saldo + (float) $reqs['tambahan'];
            $update = User::where('id', $reqs['id_user'])->update(['saldo' => $tambahan]);

            // saldo awal instansi 
            $sawal = Instansi::where('user_id', auth()->user()->id)->first()->saldo_tunai;
            $tambahan_saldoInstasnsi = (float) Instansi::where('user_id', auth()->user()->id)->first()->saldo_tunai + (float) $reqs['tambahan'];
            $updateInstansi = Instansi::where('user_id', auth()->user()->id)->update(['saldo_tunai' => $tambahan_saldoInstasnsi]);
            if ($update == true && $updateInstansi == true) {
                $saldo_tambah = [
                    "id_user" => $reqs['id_user'],
                    "kode_instansi" => "11.11.11.11",
                    "tanggal" => date('Y-m-d'),
                    "aksi" => "pengembalian_saldo",
                    "pesan" => empty($reqs['pesan']) ? "pengembalian dana" : $reqs['pesan'],
                    "oleh" => "7",
                    "saldo_awal" => $saldo_awal,
                    "saldo" =>  User::where('id', $reqs['id_user'])->first()->saldo,
                    "jumlah_aksi" => $reqs['tambahan'],
                    "kode_request" => $reqs['random_code'],
                    "kode_faktur" => null,
                    "catatan" => $reqs['catatan'],
                    "status" => "success"
                ];

                $saldo_tambah_instansi = [
                    "id_user" => auth()->user()->id,
                    "kode_instansi" => "11.11.11.11",
                    "tanggal" => date('Y-m-d'),
                    "aksi" => "pengembalian_saldo_tunai_admin",
                    "pesan" => empty($reqs['pesan']) ? "admin mengembalikan dana" : $reqs['pesan'],
                    "oleh" => $reqs['id_user'],
                    "saldo_awal" => $sawal,
                    "saldo" =>  Instansi::where('user_id', auth()->user()->id)->first()->saldo_tunai,
                    "jumlah_aksi" => $reqs['tambahan'],
                    "kode_request" => $reqs['random_code'],
                    "kode_faktur" => null,
                    "catatan" => $reqs['catatan'],
                    "status" => "success"
                ];

                $sv = new RiwayatSaldo($saldo_tambah);
                $svIns = new RiwayatSaldo($saldo_tambah_instansi);

                if ($sv->save() == true && $svIns->save() == true) {
                    RepairBug::where('id_user', $reqs['id_user'])->update(['status' => "resolved"]);
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Berhasil menambahkan saldo',
                        'response' => [
                            "saldo awal" => $saldo_awal,
                            "tambahan" => $reqs['tambahan'],
                            "saldo akhir" => $tambahan
                        ],
                        'response_instansi' => [
                            "saldo awal" => $sawal,
                            "tambahan" => $reqs['tambahan'],
                            "saldo akhir" =>  $tambahan_saldoInstasnsi
                        ],
                        'riwayat' => RiwayatSaldo::where('kode_request', $reqs['random_code'])->get()
                    ]);
                } else {
                    // hapus riwayat
                    RiwayatSaldo::where('kode_request', $reqs['random_code'])->delete();

                    // hitung tambahan yang terkurang
                    $tambahan_saldoInstasnsi = (float) Instansi::where('user_id', auth()->user()->id)->first()->saldo_tunai - (float) $reqs['tambahan'];
                    if ($sawal < Instansi::where('user_id', auth()->user()->id)->first()->saldo_tunai && $tambahan_saldoInstasnsi == Instansi::where('user_id', auth()->user()->id)->first()->saldo_tunai) {
                        $updateInstansi = Instansi::where('user_id', auth()->user()->id)->update(['saldo_tunai' => $tambahan_saldoInstasnsi]);
                    }


                    // hitung tambahan yang terkurang
                    $tambahan = (float) User::where('id', $reqs['id_user'])->first()->saldo - (float) $reqs['tambahan'];
                    if ($saldo_awal < User::where('id', $reqs['id_user'])->first()->saldo && $tambahan == User::where('id', $reqs['id_user'])->first()->saldo) {
                        User::where('id', $reqs['id_user'])->update(['saldo' => $tambahan]);
                    }

                    return response()->json([
                        'status' => 'error',
                        'message' => 'Gagal menambahkan saldo'
                    ]);
                }
            } else {
                // hitung tambahan yang terkurang
                $tambahan_saldoInstasnsi = (float) Instansi::where('user_id', auth()->user()->id)->first()->saldo_tunai - (float) $reqs['tambahan'];
                if ($sawal < Instansi::where('user_id', auth()->user()->id)->first()->saldo_tunai && $tambahan_saldoInstasnsi == Instansi::where('user_id', auth()->user()->id)->first()->saldo_tunai) {
                    $updateInstansi = Instansi::where('user_id', auth()->user()->id)->update(['saldo_tunai' => $tambahan_saldoInstasnsi]);
                }

                // hitung tambahan yang terkurang
                $tambahan = (float) User::where('id', $reqs['id_user'])->first()->saldo - (float) $reqs['tambahan'];
                if ($saldo_awal < User::where('id', $reqs['id_user'])->first()->saldo && $tambahan == User::where('id', $reqs['id_user'])->first()->saldo) {
                    User::where('id', $reqs['id_user'])->update(['saldo' => $tambahan]);
                }

                return response()->json([
                    'status' => 'error',
                    'message' => 'Gagal Penambahan saldo'
                ]);
            }
        }
    }

    public function UnitTest()
    {
        $riwayat = RiwayatSaldo::selectRaw("*, DATE_FORMAT(created_at, '%Y-%m-%d %H-%i') AS created_ats")->where('aksi', 'pengembalian_saldo')->orWhere('aksi', 'pengembalian_saldo_tunai_admin')->get();
        return response()->json($riwayat);
    }
}
