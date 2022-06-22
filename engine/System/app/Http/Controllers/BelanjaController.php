<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use \App\Models\tbl_siswa as Siswa;
use Illuminate\Support\Facades\DB;
use App\Models\RiwayatSaldo;

use Carbon\Carbon;

class BelanjaController extends Controller
{
    public function getUserBelanja()
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
                return $gets;
                break;
            case 'staff':
                $get = DB::table('users')
                    ->select(['*'])
                    ->join('staff', function ($join) {
                        $join->on('staff.id_user', '=', 'users.id');
                    })
                    ->join('guru', function ($join) {
                        $join->on('guru.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();

                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                return $gets;
                break;
            default:
                $users = User::where('id', $id_user)->first();
                return $users;
                break;
        }
    }
}
