<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Models\{Absensi, User, PengaturanInstansi, Hari};
use Illuminate\Support\Str;

class AbsensiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['absensi']]);
    }
    public function absensi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "kode" => "required"
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // $kode = "000".$request->kode;

        $user = User::where('qr_code', $request->kode)->first();
        if (empty($user)) {
            return response()->json(["status" => false, "response" => "", "msg" => "user belum terdaftar"], 400);
        }
        $date = Carbon::now();
        $today = Carbon::parse($date)->dayName;
        $hari = $hari = Hari::where('nama', $today)->first();
        $rule = PengaturanInstansi::where('kode_instansi', $user->kode_instansi)
            ->where('role', $user->role)
            ->where('id_hari', $hari->id)
            ->where('time_start', '<', $date->toTimeString())
            ->where('time_end', '>', $date->toTimeString())->first();

        if (!$rule) {
            return response()->json(["status" => false, "response" => "error", "msg" => "Tidak ada pengaturan yang sesuai"], 400);
        } else {
            $absensi = Absensi::whereDate('created_at', $date->toDateString())
                ->whereBetween('waktu', [$rule->time_start, $rule->time_end])
                ->where('user_id', $user->id)->first();
            if (!$absensi) {
                try {
                    $absensi = Absensi::create([
                        'user_id' => $user->id,
                        'kode_instansi' => $user->kode_instansi,
                        'pengaturan_instansi_id' => $rule->id,
                        'waktu' => $date->toTimeString(),
                        'keterangan' => $rule->keterangan,
                        'session_id' => Str::random(40),
                        'tanggal' => $date->toDateString(),
                    ]);
                    return response()->json(["status" => true, "response" => $absensi, "msg" => "Berhasil Melakukan Absensi"], 200);
                } catch (Exception $e) {
                    return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
                }
            } else {
                return response()->json(["status" => false, "response" => "error", "msg" => "Tidak bisa absen 2 kali pada jadwal yang sama"], 400);
            }
        }
    }

    // public function getAll(){
    //     try{
    //         $absensi = Absensi::with('siswa')->orderBy('id', 'ASC')->get();
    //         return response()->json(["status" => true, "response" => $absensi, "msg" => "Succes Get Data"], 200);
    //     }catch(Exception $e){
    //         return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
    //     } 
    // }

    public function getByInstansiRoleSiswa()
    {
        try {
            $absensi = Absensi::where('kode_instansi', auth()->user()->kode_instansi)->with('staff')->get();
            return response()->json(["status" => true, "response" => $absensi, "msg" => "Succes Get Data"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }
    public function getByInstansiRoleStaff()
    {
        try {
            $absensi = Absensi::where('kode_instansi', auth()->user()->kode_instansi)->with('staff')->get();
            return response()->json(["status" => true, "response" => $absensi, "msg" => "Succes Get Data"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }

    public function getByDate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "tanggal" => "required|date",
            "id_pengaturan" => "nullable"
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (empty($request->id_pengaturan)) {
            try {
                $absensi = Absensi::where('kode_instansi', auth()->user()->kode_instansi)
                    ->whereDate('created_at', $request->tanggal)->with('siswa')->get();
                return response()->json(["status" => true, "response" => $absensi, "msg" => "Succes Get Data"], 200);
            } catch (Exception $e) {
                return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
            }
        } else {
            try {
                $absensi = Absensi::where('kode_instansi', auth()->user()->kode_instansi)
                    ->whereDate('created_at', $request->tanggal)
                    ->where('pengaturan_instansi_id', $request->id_pengaturan)->with('siswa')->get();
                return response()->json(["status" => true, "response" => $absensi, "msg" => "Succes Get Data"], 200);
            } catch (Exception $e) {
                return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
            }
        }
    }

    public function getByIdPengaturan($id)
    {
        try {
            $absensi = Absensi::where('kode_instansi', auth()->user()->kode_instansi)
                ->where('pengaturan_instansi_id', $id)->with('siswa')->get();
            return response()->json(["status" => true, "response" => $absensi, "msg" => "Succes Get Data"], 200);
        } catch (Exception $e) {
            return response()->json(["status" => false, "response" => "error", "msg" => "oops error"], 400);
        }
    }
}
