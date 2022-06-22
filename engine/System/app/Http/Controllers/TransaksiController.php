<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\RiwayatSaldo;
use App\Models\Troli;
use Validator;

class TransaksiController extends Controller
{
    public function getByWeek($limit = null)
    {
        if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != "INSTANSI" && auth()->user()->role != "SISWA") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        $gets = RiwayatSaldo::orderBy('updated_at', 'desc')->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('W');
            });
        if (!empty($limit)) {
            $gets = RiwayatSaldo::orderBy('updated_at', 'desc')->offset(0)->limit($limit)->get();
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
}
