<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\{Absensi, User, PengaturanInstansi, Hari, Instansi};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

// bikin random
use Illuminate\Support\Str;
// Str::random(40);

class SyncronController extends Controller
{
    private $serverUrl = "";
    private $key = "";
    public function __construct()
    {
        $instansi = Instansi::first();
        $this->serverUrl = env('SERVER_URL');
        $this->key = $instansi->lisensi;
    }

    public function syncronus()
    {
        $getAbs = Absensi::where('sync', false)->with('siswa', 'pengaturanInstansi')->get();
        $newdata = [];
        foreach ($getAbs as $val) {
            if (!empty($val->pengaturanInstansi != null) && $val->pengaturanInstansi  != null) {
                array_push($newdata, $val);
            }
        }
        $getPengaturanInstansi = PengaturanInstansi::where('sync', false)->get();
        $response = Http::post($this->serverUrl . "sync/push-absen", [
            'key' => $this->key,
            "ip" => request()->ip(),
            'data' => $newdata,
            "pengaturan" => $getPengaturanInstansi
        ]);
        if ($response->status() == 200) {
            $result = json_decode($response->body(), true);
            foreach ($result['absen']['success'] as  $success) {
                Absensi::where('session_id', $success['session_id'])->update([
                    "sync" => true
                ]);
            }
            foreach ($result['pengeturan']['success'] as $v) {
                PengaturanInstansi::where('session_id', $v['session_id'])->update([
                    "sync" => true
                ]);
            }
        }
        return response()->json(json_decode($response->body()));
    }
}
