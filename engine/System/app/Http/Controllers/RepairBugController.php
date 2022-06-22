<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RepairBug;
use App\Models\User;
use Validator;


class RepairBugController extends Controller
{
    public function RepairBug()
    {
        $data = json_decode(file_get_contents('https://oncard.phoenixkreatifdigital.com/assets/json/data_new_bug.json'), true);
        foreach ($data as  $value) {
            $data = [
                'id_user' => $value['key'],
                "history_transaksi_siswa" => json_encode($value['data']),
                "error" => json_encode($value['data_error']),
                "group_error_siswa" => json_encode($value['error_group']),
                "status" => "belum",
            ];
            $validator = Validator::make($data, [
                'id_user' => 'unique:repair_bugs',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
            RepairBug::create($data);
        }
    }
    public function addGroupErrorKantin()
    {
        $data = json_decode(file_get_contents('https://oncard.phoenixkreatifdigital.com/assets/json/data_bug_kantin.json'), true);
        foreach ($data as  $value) {
            RepairBug::where(["id_user" => $value["key"]])->update([
                'group_error_kantin' => json_encode($value["error_group"]),
            ]);
        }
    }
}
