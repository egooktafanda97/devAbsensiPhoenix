<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Models\Guru;
use App\Models\User;
use App\Models\Staff;
use Excel;
use Carbon\Carbon;
use DateTime;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    
    public function getGuru(){
        $key = "";
        if(empty($_GET['key'])){
            return response()->json(["status"=> false,response=>"error","msg"=> "token notfound"], 422);
        }
        
        $login = User::where('remember_token',$_GET['key'])->count();
        
        $kode_instansi  = null;
        if($login != 1){
          return response()->json(["status"=> false,response=>"error","msg"=> "your token is wrong"], 422);   
        }else{
            $response = User::where('remember_token',$_GET['key'])->first();
            $kode_instansi  = $response['kode_instansi'];
           
        }
        $get = DB::table('staff')
            ->join('guru', function ($join) {
                $join->on('staff.id_staf', '=', 'guru.id_staff');
            })
            ->where('staff.kode_instansi',$kode_instansi)
            ->get();
        return response()->json([
            "result" => $get,
            "jumlah" => count($get)
        ]);
        
    }
}
