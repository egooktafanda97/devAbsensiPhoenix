<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatSaldo;
use Validator;
use Illuminate\Support\Str;
use App\Models\Instansi;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Kantin;
use App\Models\tbl_siswa;
use Carbon\Carbon;


class RiwayatSaldoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }
    public function getRiwayat($user_id, $limit = null)
    {
        if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != "INSTANSI" && auth()->user()->role != "SISWA") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        if (auth()->user()->role == "SISWA") {
            $user_id = auth()->user()->id;
        }
        $gets = RiwayatSaldo::where(["id_user" => $user_id])->orderBy('updated_at', 'desc')->get();
        if (!empty($limit)) {
            $gets = RiwayatSaldo::where(["id_user" => $user_id])->orderBy('updated_at', 'desc')->offset(0)->limit(2)->get();
        }

        return response()->json($gets);
    }
    public function getRiwayatAll($limit =null)
    {
        if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != "INSTANSI" && auth()->user()->role != "SISWA") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        $gets = RiwayatSaldo::orderBy('updated_at', 'desc')->offset(0)->limit(50)->get();
        if (!empty($limit)) {
            $gets = RiwayatSaldo::orderBy('updated_at', 'desc')->offset(0)->limit($limit)->get();
        }

        $res = [];
        foreach ($gets as $value) {
            array_push($res, [
                "riwayat" => $value,
                "user"   => $this->getUserJoin($value['id_user'])
            ]);
        }

        return response()->json($res);
    }
    public function getRiwayatByWeek($limit = null)
    {

        if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != "INSTANSI" && auth()->user()->role != "SISWA") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        $gets = RiwayatSaldo::orderBy('id_riwayat_saldo', 'desc')->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('W');
            });
        if (!empty($limit)) {
            $gets = RiwayatSaldo::orderBy('id_riwayat_saldo', 'desc')->offset(0)->limit($limit)->get();
        }

        $week_num = [];
        foreach ($gets as $key => $value) {
            array_push($week_num, $key);
        }
        $max_data = max($week_num);
        $max_data_loop = $max_data - 5;
        $data_result = [];
        if ($max_data >= 5) {
            for ($i = $max_data_loop; $i <=  $max_data; $i++) {
                $lor = false;
                foreach ($gets as $key => $value) {

                    $ree = [];
                    $month = "";
                    if ((int)$key == $i) {
                        $lor = true;
                        foreach ($value as $values) {
                            array_push($ree, [
                                "riwayat" => $values,
                                "user"   => $this->getUserJoin($values['id_user'])
                            ]);
                            $month = Carbon::parse($values['created_at'])->format('Y-m');
                        }
                        // Carbon::now()->format('W')
                        array_push($data_result, [
                            "nomor_minggu" => $key,
                            "date" => $month,
                            "value" => $ree
                        ]);
                    }
                }
                if ($lor == false) {
                    array_push($data_result, [
                        "nomor_minggu" => $i,
                        "date" => "",
                        "value" => []
                    ]);
                }
                // var_dump($i);
            }
        }
        return response()->json($data_result);
    }
    public function getByAuth($limit = null)
    {
        $user_id = auth()->user()->id;

        $gets = RiwayatSaldo::where(["id_user" => $user_id])->orderBy('updated_at', 'desc')->get();
        if (!empty($limit)) {
            $gets = RiwayatSaldo::where(["id_user" => $user_id])->orderBy('updated_at', 'desc')->offset(0)->limit(2)->get();
        }

        return response()->json($gets);
    }
    public function getRiwayatPencairanh($id, $limit = null)
    {
        $user_id = $id;
        $gets = RiwayatSaldo::where(["id_user" => $user_id, "aksi" => "pencairan"])->orderBy('updated_at', 'desc')->get();
        if (!empty($limit)) {
            $gets = RiwayatSaldo::where(["id_user" => $user_id, "aksi" => "pencairan"])->orderBy('updated_at', 'desc')->offset(0)->limit(2)->get();
        }
        return response()->json($gets);
    }
    public function getRiwayatSaldoUser($id)
    {
        $user_id = $id;
        $gets = RiwayatSaldo::where(["id_user" => $user_id, "aksi" => "pencairan"])->orderBy('updated_at', 'desc')->get();
        if (!empty($limit)) {
            $gets = RiwayatSaldo::where(["id_user" => $user_id, "aksi" => "pencairan"])->orderBy('updated_at', 'desc')->offset(0)->limit(2)->get();
        }
        $res = [];
        foreach ($gets as $value) {
            $data = $this->getUserJoin($value->id_user);
            array_push($res, ["riwayat" => $value, "data" => $data]);
        }
        return response()->json($res);
    }
    public function getRiwayatSaldoIdRiwayat($id)
    {
        $gets = RiwayatSaldo::where(["id_riwayat_saldo" => $id])->first();
        return response()->json(["riwayat" => $gets, "data" => $this->getUserJoin($gets->id_user)]);
    }
    public function getUserJoin($id_user)
    {
        $cek = User::where('id', $id_user)->first();
        switch ($cek['name_table_join']) {
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
                    ->select(['*', 'staff.nama_lengkap as nama_user', 'staff.alamat_rumah as alamat_user'])
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
    public function getRiwayatTypeKantin($id_user, $slug = null)
    {
        $result_siswa = DB::table('riwayat_saldo')
            ->join('kantin', function ($join) {
                $join->on('kantin.user_id', '=', 'riwayat_saldo.id_user');
            })
            ->where('riwayat_saldo.id_user', $id_user)
            // ->where('tanggal', $slug)
            ->orderBy('tanggal', "DESC")->get()
            ->groupBy(function ($item) {
                return $item->id_user;
            });
        return $result_siswa;
    }
    public function History($type = "siswa")
    {
        $id_us = auth()->user()->id;
        if (auth()->user()->role == "INSTANSI") {
            $id_us = $_GET['id_user'];
        }
        if ($type == "siswa") {
            $result = RiwayatSaldo::selectRaw("*, DATE_FORMAT(created_at, '%Y-%m-%d %H-%i') AS created_at")->where('id_user', $id_us)
                ->orderBy('created_at', "DESC")->get()
                ->groupBy(function ($item) {
                    return $item->id_user;
                });
        } elseif ($type == 'kantin') {
            $result = RiwayatSaldo::selectRaw("*, DATE_FORMAT(created_at, '%Y-%m-%d %H-%i') AS created_at")->where('id_user', $id_us)
                ->orderBy('created_at', "DESC")->get()
                ->groupBy(function ($item) {
                    return $item->id_user;
                });
        }

        return response()->json($result);
    }
}
