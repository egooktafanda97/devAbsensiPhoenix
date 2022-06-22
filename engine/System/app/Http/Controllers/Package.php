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

class Package extends Controller
{

    public static function getUserJoin($id_user)
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
                    ->select(['*', 'tbl_siswa.nama_siswa as nama_user', 'tbl_siswa.alamat as alamat_user'])
                    ->join('staff', function ($join) {
                        $join->on('staff.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();
                return $get;
                break;
            case 'orang_tua':
                $get = DB::table('users')
                    ->select(['*', 'orang_tua.nama_lengkap as nama_user'])
                    ->join('orang_tua', function ($join) {
                        $join->on('orang_tua.id_user', '=', 'users.id');
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
