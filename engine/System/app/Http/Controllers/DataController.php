<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use \App\Models\tbl_siswa as Siswa;
use Illuminate\Support\Facades\DB;
use App\Models\RiwayatSaldo;
use App\Models\Transaksi;
use App\Models\RepairBug;

use Carbon\Carbon;

class DataController extends Controller
{
    public function getUser()
    {
        if (empty($_GET['qr_code'])) {
            return response()->json([
                'status' => 'error',
                'message' => 'card not found'
            ]);
        }
        $data = User::where('users.qr_code', 'like', '%' . $_GET['qr_code'] . '%')->first();
        $res = $this->joinedUser($data->id);
        return  response()->json($res, 200);
    }

    public function joinedUser($id_user)
    {
        $cek = User::where('id', $id_user)->first();
        if (empty($cek->name_table_join)) {
            return [
                "msg" => "data user ini tidk lengkap",
                "status" => 'error'
            ];
        }
        switch ($cek->name_table_join) {
            case 'kantin':
                $get = DB::table('users')
                    ->select(['*', 'kantin.nama_kantin as nama_user', 'kantin.alamat_pemilik as alamat_user'])
                    ->join('kantin', function ($join) {
                        $join->on('kantin.user_id', '=', 'users.id');
                    })

                    ->where('users.id', $id_user)
                    ->first();
                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                $gets += ["status_level" => "Kantin"];
                return $gets;
                break;

            case 'siswa':
                $get = DB::table('users')
                    ->select(['*', 'tbl_siswa.nama_siswa as nama_user', 'tbl_siswa.alamat as alamat_user'])
                    ->join('tbl_siswa', function ($join) {
                        $join->on('tbl_siswa.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();
                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                $gets += ["status_level" => "Siswa"];
                return $gets;
                break;
            case 'staff':
                $get = DB::table('users')
                    ->select(['*', 'staff.nama_lengkap as nama_user'])
                    ->join('staff', function ($join) {
                        $join->on('staff.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();

                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                $gets += ["status_level" => "Guru / Staff"];
                return $gets;
                break;
            default:
                $users = User::where('id', $id_user)->first();
                return $users;
                break;
        }
    }
    public static function objectToArray(&$object)
    {
        return @json_decode(json_encode($object), true);
    }
    public function Tester()
    {
        // return response()->json(count(RiwayatSaldo::where(["id_user" => "0430"])->orderBy('updated_at', 'desc')->get()));
        // return response()->json($this->getDataTimes());
        // return response()->json($this->getDataTimeskantin());

        // return response()->json(DB::table('repair_bugs')
        //     ->select(["nis", "tbl_siswa.nama_siswa", 'repair_bugs.id_user'])
        //     ->join('tbl_siswa', function ($join) {
        //         $join->on('repair_bugs.id_user', '=', 'tbl_siswa.id_user');
        //     })->get());

        // jarak waktu
        // $startTime = Carbon::parse('2022-03-20 07:49:26');
        // $endTime = Carbon::now()->format('Y-m-d H:i:s');
        // return response()->json($startTime->diffinseconds($endTime));
    }

    public function getHistorySiswa($id_siswa)
    {
        $result = RiwayatSaldo::selectRaw("*, DATE_FORMAT(created_at, '%Y-%m-%d %H-%i') AS created_ats")
            ->where('id_user', $id_siswa)->get();

        return response()->json($result);
    }

    public function DataTrackingkantin()
    {
        $result = RiwayatSaldo::selectRaw("*, DATE_FORMAT(created_at, '%Y-%m-%d %H-%i') AS created_ats")
            ->where('oleh', '649')->get();

        $ar = [];
        $saldo = 0;
        foreach ($result as  $vols) {
            $saldo += $vols['jumlah_aksi'];
            $dt = [
                "id_riwayat" => $vols['id_riwayat_saldo'],
                "tanggal" => $vols['created_ats'],
                "aksi" => $vols['aksi'],
                "pesan" => $vols['pesan'],
                "id_siswa" => $vols['oleh'],
                "kantin" => $vols['id_user'],
                "saldo_awal"  => $vols['saldo_awal'],
                "jumlah_belanja" => $vols["jumlah_aksi"],
                "saldo_akhir" => $vols['saldo'],
                "penambahan_saldo" => $saldo,
            ];
            array_push($ar, $dt);
        }
        return response()->json($ar);
    }

    public function siswaGetDobleTransaksi()
    {
        $result_siswa = RiwayatSaldo::selectRaw("*, DATE_FORMAT(created_at, '%Y-%m-%d %H-%i') AS created_ats")
            ->where('aksi', 'pengurangan_saldo')
            ->orderBy('id_user')->get()
            ->groupBy(function ($item) {
                return $item->created_at->format('Y-m-d H:i');
            });

        $res_1 = [];
        foreach ($result_siswa as $s) {
            $ot = array();
            foreach ($s as $element) {
                $ot[$element['id_user']][] = $element;
            }
            array_push($res_1, $ot);
        }

        $res_2 = [];
        foreach ($res_1 as  $vel) {
            foreach ($vel as $kk => $vv) {
                if (count($vv) > 1) {
                    $ar = [];
                    foreach ($vv as  $vols) {
                        $dt = [
                            "id_riwayat" => $vols['id_riwayat_saldo'],
                            "tanggal" => $vols['created_ats'],
                            "id_siswa" => $vols['id_user'],
                            "nis" => Siswa::where('id_user', $vols['id_user'])->first()->nis,
                            "kantin" => $vols['oleh'],
                            // "saldo_awal_kantin" =>
                            // "siswa" => "",
                            "saldo_awal_siswa"  => $vols['saldo_awal'],
                            "jumlah_belanja" => $vols["jumlah_aksi"],
                            // "saldo_akhir_kantin" => $vv['saldo'],
                            "saldo_akhir_siswa" => $vols['saldo'],
                        ];
                        array_push($ar, $dt);
                    }
                    $res_2[$kk][] = $ar;
                }
            }
        }
        return $res_2;
    }
    public function kantinGet()
    {
        $result_kantin = RiwayatSaldo::selectRaw("*, DATE_FORMAT(created_at, '%Y-%m-%d %H-%i') AS created_ats")
            ->where('aksi', 'penambahan_saldo')
            ->orderBy('oleh')->get()
            ->groupBy(function ($item) {
                return $item->created_at->format('Y-m-d H:i');
            });

        $res_1 = [];
        foreach ($result_kantin as $s) {
            $ot = array();
            foreach ($s as $element) {
                $ot[$element['oleh']][] = $element;
            }
            array_push($res_1, $ot);
        }

        $res_2 = [];
        foreach ($res_1 as  $vel) {
            foreach ($vel as $kk => $vv) {
                if (count($vv) > 1) {
                    $ar = [];
                    foreach ($vv as  $vols) {
                        $dt = [
                            "id_riwayat" => $vols['id_riwayat_saldo'],
                            "tanggal" => $vols['created_ats'],
                            "siswa" => $vols['oleh'],
                            "kantin" => $vols['id_user'],
                            "saldo_awal_kantin" => $vols['saldo_awal'],
                            "jumlah_belanja" => $vols["jumlah_aksi"],
                            "saldo_akhir_kantin" => $vols['saldo'],
                        ];
                        array_push($ar, $dt);
                    }
                    $res_2[$kk] = $ar;
                }
            }
        }
        return $res_2;
    }
    public function getTransaksiByKode()
    {
        $result_siswa = Transaksi::all()->groupBy(function ($item) {
            return $item->kode_faktur;
        });
        $res = [];
        foreach ($result_siswa as $value) {
            if (count($value) > 1) {
                array_push($res, $value);
            }
        }
        return $res;
    }
    public function TesterPost(Request $request)
    {
    }
    public function getDataTimes()
    {
        $result_siswa = RiwayatSaldo::selectRaw("*, DATE_FORMAT(created_at, '%Y-%m-%d %H-%i-%s') AS created_ats")
            ->where('aksi', 'pengurangan_saldo')
            ->orWhere('aksi', 'tambah')
            // ->where('tanggal', date("Y-m-d"))
            ->orderBy('id_user')->get()
            ->groupBy(function ($item) {
                return $item->id_user;
            });

        return $result_siswa;
    }
    public function getDataTimeskantin()
    {
        $result_siswa = RiwayatSaldo::where('aksi', 'penambahan_saldo')

            ->orWhere('aksi', 'pencairan')
            // ->where('tanggal', date("Y-m-d"))
            ->orderBy('id_user')->get()
            ->groupBy(function ($item) {
                return $item->id_user;
            });
        return $result_siswa;
    }
}



 //QUERY CEK PENGURANGAN SALDO USER BELANJA HARI INI
        //$test = RiwayatSaldo::where(['tanggal'=>date('Y-m-d'),'aksi'=>'pengurangan_saldo'])->sum('jumlah_aksi');

        //  $get = DB::table('riwayat_saldo')
        //             ->join('staff', function ($join) {
        //                 $join->on('staff.id_user', '=', 'riwayat_saldo.id_user');
        //             })->get();