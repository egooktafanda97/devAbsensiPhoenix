<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\{User, Instansi};

class InstansiController extends Controller
{
    public function getInstansi(Request $request){
        $validator = Validator::make($request->all(), [
            "remember_token" => "required|string",
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('remember_token', $request->remember_token)->first();
        $instansi = Instansi::where('kode_instansi', $user->kode_instansi)->with('user')->get();

        return response()->json(["status" => true, "response" => $instansi, "msg" => "Succes Get Data"], 200);
    }
}
