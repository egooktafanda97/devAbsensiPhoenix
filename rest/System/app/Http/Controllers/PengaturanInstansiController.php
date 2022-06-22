<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\{PengaturanInstansi, Hari};

class PengaturanInstansiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id_hari" => "required|in:1,2,3,4,5,6,7",
            "keterangan" => "required|string",
            "time_start" => "required|date_format:H:i",
            "time_end" => "required|date_format:H:i",
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try {
            $rule = PengaturanInstansi::create([
                'kode_instansi' => auth()->user()->kode_instansi,
                'id_hari' => $request->id_hari,
                'keterangan' => $request->keterangan,
                'time_start' => $request->time_start,
                'time_end' => $request->time_end,
                "tanggal" => date("Y-m-d")
            ]);
            return response()->json(["status" => true, "response" => $rule, "msg" => "data berhasil di input"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error update"], 400);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            "id_hari" => "required|in:1,2,3,4,5,6,7",
            "keterangan" => "required|string",
            "time_start" => "required|date_format:H:i",
            "time_end" => "required|date_format:H:i",
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try {
            $rule = PengaturanInstansi::where('id', $id);
            $rule->update([
                'id_hari' => $request->id_hari,
                'keterangan' => $request->keterangan,
                'time_start' => $request->time_start,
                'time_end' => $request->time_end,
                'tanggal' => date("Y-m-d")
            ]);
            return response()->json(["status" => true, "response" => $rule, "msg" => "data berhasil di update"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error update"], 400);
        }
    }

    public function getAll()
    {
        try {
            $rule = PengaturanInstansi::all()->sortBy('id');
            return response()->json(["status" => true, "response" => $rule, "msg" => "Succes Get Data"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }

    public function getAllByInstansi()
    {
        try {
            $rule = PengaturanInstansi::where('kode_instansi', auth()->user()->kode_instansi)->orderBy('id_hari', 'ASC')->get();
            return response()->json(["status" => true, "response" => $rule, "msg" => "Succes Get Data"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }

    public function getToday()
    {
        try {
            $date = Carbon::now();
            $today = Carbon::parse($date)->dayName;
            $hari = Hari::where('nama', $today)->first();
            $rule = PengaturanInstansi::where('kode_instansi', auth()->user()->kode_instansi)->where('id_hari', $hari->id)->get();
            return response()->json(["status" => true, "response" => $rule, "msg" => "Succes Get Data"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }

    public function getByDay(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "hari" => "required|string",
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $hari = Hari::where('nama', $request->hari)->first();
        try {
            $rule = PengaturanInstansi::where('id_hari', $hari->id)->where('kode_instansi', auth()->user()->kode_instansi)->get();
            return response()->json(["status" => true, "response" => $rule, "msg" => "Succes Get Data"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }

    public function getById($id)
    {
        try {
            $rule = PengaturanInstansi::where('id', $id)->where('kode_instansi', auth()->user()->kode_instansi)->get();
            return response()->json(["status" => true, "response" => $rule, "msg" => "Succes Get Data"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }

    public function delete($id)
    {
        try {
            $rule = PengaturanInstansi::where('id', $id);
            $rule->delete();
            return response()->json(["status" => true, "response" => $rule, "msg" => "Succes Delete Data"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }
}
