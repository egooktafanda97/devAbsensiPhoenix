<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }

    public function getSiswa(){
        $siswa = Siswa::where('kode_instansi', auth()->user()->kode_instansi)->with(['user', 'absensi' => function($q){
            $q->whereDate('created_at', Carbon::today());
        }])->get();

        return response()->json(["status" => true, "response" => $siswa, "msg" => "Succes Get Data"], 200);
    }
}
