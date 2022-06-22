<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        try{
            $siswa = User::where('role', 'SISWA')
                    ->where('kode_instansi', auth()->user()->kode_instansi)->get();
            return response()->json(["status" => true, "response" => $siswa, "msg" => "Succes Get Data"], 200);
        }catch(Exception $e){
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }
}
