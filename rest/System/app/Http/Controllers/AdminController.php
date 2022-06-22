<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\{Absensi, User, PengaturanInstansi, Hari};

class AdminController extends Controller
{
    public function getTidakHadir(){
        $absensi = Absensi::select('user_id')->whereDate('created_at', Carbon::today())->get();
        try{
            $user = User::whereNotIn('id', $absensi)->where('role', 'SISWA')->with('siswa')->get();
            return response()->json(["status" => true, "response" => $user, "msg" => "Succes Get Data"], 200);
        }catch(Exception $e){
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }

    public function absensiByAdmin(Request $request, $id){
        $validator = Validator::make($request->all(), [
            "keterangan" => "required|string"
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('id', $id)->first();
        try{
            $absensi = Absensi::create([
                'user_id' => $user->id,
                'kode_instansi' => $user->kode_instansi,
                'keterangan' => $request->keterangan
            ]);
            return response()->json(["status" => true, "response" => $absensi, "msg" => "Berhasil Melakukan Absensi"], 200);
        }catch(Exception $e){
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        } 
    }
}
