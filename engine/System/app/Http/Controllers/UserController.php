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


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'qrCode', 'loginTime']]);
    }
    public function getUserQR($qrCode)
    {
        // $userS = User::where('qr_code',$qrCode)->first();

        // if(empty($userS->name_table_join)){
        //     return response()->json(["response"=>"error","msg"=>"user ini belun terdaftar ke kartu manapun","status"=>false]);
        // }

        // if($userS->name_table_join == 'siswa'){




        // }
    }

    public function getUserQrCode($slug)
    {
        return response()->json([
            "data" => $this->getUserJoinByQR($slug),
            "riwayat" => RiwayatSaldo::where(["id_user" => User::where('qr_code', $slug)->first()->id])->orderBy('updated_at', 'desc')->offset(0)->limit(10)->get()
        ]);
    }

    public function getUserJoinByQR($qr)
    {
        $cek = User::where('qr_code', $qr)->first();
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

                    ->where('qr_code', $qr)
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
                    ->where('qr_code', $qr)
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
                    ->where('qr_code', $qr)
                    ->first();

                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                $gets += ["status_level" => "Guru / Staff"];
                return $gets;
                break;
            default:
                $users = User::where('qr_code', $qr)->first();
                return $users;
                break;
        }
    }
}
