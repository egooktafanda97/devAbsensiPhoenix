<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\{Absensi, User, PengaturanInstansi, Hari};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class SyncronController extends Controller
{
    // public function push(){
    //     $absensi_server = DB::connection('db-server')->table('absensi')->select('user_id')->whereDate('created_at', Carbon::today())->get();
    //     $absensi = Absensi::whereNotIn('user_id', $absensi_server)->whereDate('created_at', Carbon::today())->get();
        
    //     if(empty($absensi)){
    //         return response()->json(["status" => false, "response" => "", "msg" => "Tidak ada data absensi"], 400);
    //     }
    //     else{
    //         foreach($absensi as $data){
    //                 DB::connection('db-server')->table('absensi')->insert([
    //                     'id' => $data->id,
    //                     'user_id' => $data->user_id,
    //                     'kode_instansi' => $data->kode_instansi,
    //                     'pengaturan_instansi_id' => $data->pengaturan_instansi_id,
    //                     'waktu' => $data->waktu,
    //                     'keterangan' => $data->keterangan,
    //                     'created_at' => Carbon::now(),
    //                     'updated_at' => Carbon::now()
    //                 ]);
    //         }
    //         return response()->json(["status" => true, "response" => $absensi, "msg" => "Berhasil Menyalin Data"], 200);
    //     }
    // }

    public function syncronus(){
        // $getAbs = Absensi::where('sync',false)->with('siswa','user')->get();
        // print_r(env(SERVER_URL));
        // $response = Http::post(env(SERVER_URL), [
        //     'name' => 'Steve',
        //     'role' => 'Network Administrator',
        // ]);
        return response()->json("ok");
    }
}
