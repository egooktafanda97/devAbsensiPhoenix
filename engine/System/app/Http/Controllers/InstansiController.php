<?php

namespace App\Http\Controllers;

use App\Helper\Helpers;

use Validator;
use Illuminate\Http\Request;
use \Illuminate\Support\Str;

use App\Models\Instansi;
use App\Models\RiwayatSaldo;
use Illuminate\Support\Facades\DB;

use App\Imports\UsersImport;
use Excel;
use Carbon\Carbon;
use DateTime;

use \App\Models\tbl_siswa as Siswa;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use \App\Models\User;

class InstansiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['Created']]);
    }

    public function index()
    {
    }
    public function Created(Request $request)
    {
        // try {
        $data = $request->all();


        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role == 'INSTANSI') {
            if (!empty($data['kode_instansi'])) {
                unset($data['kode_instansi']);
            }
            if (!empty($data['user_id'])) {
                unset($data['user_id']);
            }
            $data += ["kode_instansi" => auth()->user()->kode_instansi, "user_id" => auth()->user()->id];
        }



        $validator = Validator::make($data, [
            "kode_instansi"     => 'required|string|between:2,100|unique:instansi',
            "user_id"           => 'required|between:1,100|unique:instansi',
            // "user_pimpinan"     => 'required|between:1,100',
            "nama_instansi"     => 'required|string|between:2,100',
            "email_instansi"    => 'required|email|between:2,100|unique:instansi',
            "alamat"            => 'required',
            "provinsi"          => 'required',
            "kabupaten"         => 'required',
            "kecamatan"         => 'required',
            "about"             => 'required',
            "visi"              => 'required',
            "misi"              => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $valid = $validator->validated();
        $uploads = $this->Upgambar($request, 'filesss', '/Assets/img/logo_instansi/');
        if ($uploads['status'] == true) {
            $valid += ["image" => $uploads['fileName']];
        } else {
            $valid += ["image" => "default.jpg"];
        }
        $instansi = Instansi::create(array_merge($valid, [
            "saldo_tunai" => "0",
            "saldo_bank" => "0",
            "saldo_payment" => "0",
        ]));
        return response()->json([
            'message' => 'User successfully',
            'response' => $instansi,
            'status_actios' => true
        ], 200);
        // } catch (\Throwable $th) {
        //     return response()->json(["response" => "error", "msg" => "server error"], 500);
        // }
    }
    public function update(Request $request)
    {
        try {
            $data = $request->all();

            if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
                return response()->json(['error' => 'You don\'t have access'], 401);
            }

            if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role == 'INSTANSI') {
                if (!empty($data['kode_instansi'])) {
                    unset($data['kode_instansi']);
                }
                if (!empty($data['user_id'])) {
                    unset($data['user_id']);
                }
                $data += ["kode_instansi" => auth()->user()->kode_instansi, "user_id" => auth()->user()->id];
            }
            $data_upl = $data;
            unset($data_upl['user_id']);
            unset($data_upl['kode_instansi']);

            // $validator = Validator::make($data, [
            //     "nama_instansi"     => 'required|string|between:2,100',
            //     "email_instansi"    => 'required|email|between:2,100',
            //     "alamat"            => 'required',
            //     "provinsi"          => 'required',
            //     "kabupaten"         => 'required',
            //     "kecamatan"         => 'required',
            //     "about"             => 'required',
            //     "visi"              => 'required',
            //     "misi"              => 'required',
            // ]);
            // if ($validator->fails()) {
            //     return response()->json($validator->errors()->toJson(), 400);
            // }
            // $valid = $validator->validated();
            $valid = $data_upl;

            $uploads = $this->Upgambar($request, 'filesss', '/Assets/img/logo_instansi/');
            if ($uploads['status'] == true) {
                $valid += ["image" => $uploads['fileName']];
            }

            $instansi = Instansi::where('kode_instansi', auth()->user()->kode_instansi)->update($valid);
            return response()->json([
                'message' => 'update successfully',
                'response' => Instansi::where('kode_instansi', auth()->user()->kode_instansi)->first(),
                'status_actios' => true
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(["response" => "error", "msg" => "server error"], 500);
        }
    }

    public function get()
    {
        if (auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $getS = DB::table('instansi')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'instansi.user_id');
            })
            ->get();
        return response()->json($getS);
    }
    public function getSlug()
    {
        if (auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        if (empty($_GET['kodeinstansi'])) {
            return response()->json(["msg" => "silahkan tambahkan ?kodeinstansi=kodeinstansi", "status" => false]);
        }
        $getS = DB::table('instansi')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'instansi.user_id');
            })
            ->where('instansi.kode_instansi', $_GET['kodeinstansi'])
            ->first();
        return response()->json($getS);
    }

    public function getByAuth()
    {

        $getS = DB::table('instansi')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'instansi.user_id');
            })
            ->where('instansi.kode_instansi', auth()->user()->kode_instansi)
            ->first();
        return response()->json($getS);
    }


    public function Upgambar($request, $nameFile, $path)
    {
        if ($request->hasFile($nameFile)) {
            $validator = Validator::make($request->all(), [
                $nameFile         => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            if ($validator->fails()) {
                return response()->json(["status" => false, "msg" => "tidak valid"]);
            }
            $image = $request->file($nameFile);
            $image_name = Str::random() . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path($path);
            $image->move($destinationPath, $image_name);
            return ["status" => true, "msg" => "berhasil upload gambar", "fileName" => $image_name];
        } else {
            return ["status" => false, "msg" => "tidak ada gambar"];
        }
    }
    public function updateSaldoBank(Request $request)
    {
        if (auth()->user()->role != 'INSTANSI' &&   auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        $validator = Validator::make($request->all(), [
            "jumlah"     => 'required',
            "jenis"      => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $getS = DB::table('instansi')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'instansi.user_id');
            })
            ->where('instansi.kode_instansi', auth()->user()->kode_instansi)
            ->first();


        $aksi = "";
        $jumlah = "";
        $uploads = "";
        $saldo = 0;
        if ($request->jenis == "penambahan") {
            $aksi = "penambahan_saldo_bank";
            $jumlah = $request->jumlah;
            $saldo = (float) $getS->saldo_bank + (float) $request->jumlah;
        } else {
            $aksi = "pengurangan_saldo_bank";
            $jumlah = $request->jumlah;
            $saldo = (float) $getS->saldo_bank - (float) $request->jumlah;

            if (((float) $getS->saldo_bank - (float) $request->jumlah) < 0) {
                return response()->json(["status" => "false", "msg" => "saldo yang anda kurangi tidak boleh lebih dari saldo anda"], 401);
            }

            $uploads = \App\Helper\Helpers::Upgambar($request, 'bukti', "'/Assets/img/bukti_transfer/");
        }

        $riwayat_bank = [
            "id_user" => auth()->user()->id,
            "kode_instansi" => auth()->user()->kode_instansi,
            "tanggal" => date('Y-m-d'),
            "aksi" => $aksi,
            "pesan" => "perubahan saldo bank pada instansi",
            "oleh" => auth()->user()->id,
            "saldo_awal" => $getS->saldo_bank,
            "saldo" => $saldo,
            "jumlah_aksi" => $jumlah,
            "jenis_saldo" => "saldo_bank",
        ];

        if (!empty($uploads) && $uploads['status'] == true) {
            $riwayat_bank += ["bukti" => $uploads['fileName']];
        }

        RiwayatSaldo::create($riwayat_bank);

        Instansi::where('kode_instansi', auth()->user()->kode_instansi)->update([
            "saldo_bank" => $saldo
        ]);

        $get = Instansi::where('kode_instansi', auth()->user()->kode_instansi)->first();
        return response()->json($get);
    }
    public function Inisiasi(Request $request)
    {

        $data = Excel::toArray(new UsersImport(), $request->excel);

        $init_data = $data[0];
        unset($init_data[0]);

        $keys_ar = [];
        foreach ($data[0][0] as $keys) {
            array_push($keys_ar, $keys);
        }

        $ar_santri = [];
        foreach ($init_data as  $value) {
            $newAr = [];
            for ($i = 0; $i <= 15; $i++) {
                $newAr += [$keys_ar[$i] => $value[$i]];
            }
            array_push($ar_santri, $newAr);
        }

        $arr = [];
        $error = [];
        $io = 1;
        foreach ($ar_santri as $value) {

            $santri_init = [
                "nis" => $value['nis'],
                "kode_instansi" => auth()->user()->kode_instansi,
                "nama_siswa" => $value['nama_siswa'],
                "jk" => $value['jk'],
                "tgl_lahir" => gmdate("Y-m-d", ($value['tgl_lahir'] - 25569) * 86400),
                "alamat" => $value['alamat'],
                "provinsi" => "",
                "kabupaten" => "",
                "kecamatan" => "",
                "agama" => $value['agama'],
                "tahun_masuk" => $value['tahun_masuk'],
                "kelas" => $value['kelas']
            ];
            try {
                $init_data_ins = Siswa::create($santri_init);
                array_push($arr, $init_data_ins);
            } catch (\Exception $e) {
                array_push($error, $santri_init);
                continue;
            }
        }

        return response()->json([
            "berhasil" => count($arr),
            "respon_berhasil" => $arr,
            "gagal" => count($error),
            "respon_gagal" => $error
        ]);
    }
    public function validateDate($date, $format = 'd/m/Y')
    {
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }
    // update
    public function updateSaldoTunai(Request $request)
    {
        try {
            if (auth()->user()->pin != $request->pin && auth()->user()->role == 'INSTANSI') {
                return response()->json([
                    "reponse" => [],
                    "status" => false,
                    "msg" => "password salah"
                ]);
            }
            $instansi = DB::table('instansi')
                ->join('users', function ($join) {
                    $join->on('users.id', '=', 'instansi.user_id');
                })
                ->where('instansi.kode_instansi', auth()->user()->kode_instansi)
                ->first();

            $tootal =  (float)$instansi->saldo_tunai + (float)$request->saldo_tambahan;
            $riwayat_transfer = [
                "id_user" => auth()->user()->id,
                "kode_instansi" => auth()->user()->kode_instansi,
                "tanggal" => date('Y-m-d'),
                "aksi" => "update_saldo_tunai",
                "pesan" => "saldo tunai di tambah oleh " . auth()->user()->id,
                "oleh" => auth()->user()->id,
                "saldo_awal" => $instansi->saldo,
                "saldo" => $tootal,
                "jumlah_aksi" => $request->saldo_tambahan,
                "jenis_saldo" => "saldo_tunai",
                "id_payment" => null
            ];

            $riwayat = RiwayatSaldo::create($riwayat_transfer);

            Instansi::where('kode_instansi', auth()->user()->kode_instansi)->update([
                "saldo_tunai" => $tootal
            ]);

            return response()->json([
                "instansi" => Instansi::where('kode_instansi', auth()->user()->kode_instansi)->first(),
                "riwayat" => $riwayat
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "reponse" => [],
                "status" => false
            ]);
        }
    }
}
