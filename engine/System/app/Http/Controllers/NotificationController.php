<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Validator;
use \Illuminate\Support\Str;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }
    public function Create(Request $request)
    {
        $reqs = $request->all();
        $data = [
            'kode_instansi' => auth()->user()->kode_instansi,
            'id_user' => auth()->user()->id,
            'id_tujuan' => $reqs['id_tujuan'],
            'message' => $reqs['message'],
            'status' => "not_open",
            'redirect' => !empty($reqs['redirect']) ? $reqs['redirect'] : ''
        ];
        $validator = Validator::make($data, [
            'kode_instansi' => 'required',
            'id_user' =>  'required',
            'id_tujuan' => 'required',
            'message' =>  'required',
            'status' =>  'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $notif = Notification::create($data);

        return response()->json([
            'message'    => 'create successfully',
            'response'   => $notif,
            "status"     => true
        ], 200);
    }
    public function Get()
    {
        $notif = Notification::where("id_tujuan", auth()->user()->id)->orderBy('created_at', "DESC")->get();
        return response()->json($notif);
    }
    public function UpdateStatus($slug)
    {
        Notification::where(["id_tujuan" => auth()->user()->id, "id_notif" => $slug])->update([
            "status" => "open"
        ]);
        return response()->json([
            'message'    => 'update successfully',
            'response'   => [],
            "status"     => true
        ], 200);
    }
    public function GetById($slug)
    {
        $notif =  Notification::where(["id_tujuan" => auth()->user()->id, "id_notif" => $slug])->first();
        return response()->json($notif);
    }
    public function Deletes($slug)
    {
        Notification::where(["id_tujuan" => auth()->user()->id, "id_notif" => $slug])->delete();
        return response()->json([
            'message'    => 'delete successfully',
            'response'   => [],
            "status"     => true
        ], 200);
    }
}
