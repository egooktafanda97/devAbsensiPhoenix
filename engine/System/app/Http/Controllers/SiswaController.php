<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use \App\Models\tbl_siswa as Siswa;
use Illuminate\Support\Facades\DB;
use App\Models\RiwayatSaldo;

use Carbon\Carbon;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['siswaQrCode', 'siswaQrCodePin', 'siswaPin']]);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        if (auth()->user()->role != 'INSTANSI') {
            return response()->json(['error' => 'You don\'t have access', "status"     => false], 401);
        }
        if (!empty($data['kode_instansi'])) {
            unset($data['kode_instansi']);
        }
        $data += ["kode_instansi" => auth()->user()->kode_instansi];

        $validator = Validator::make($data, [
            "nis"           => 'required|string|between:2,100',
            "kode_instansi" => 'required|string|between:2,100',
            "nama_siswa"  => 'required|string|between:1,100',
            "jk"          => 'required|string|between:1,100',
            "tgl_lahir"   => 'required|string|between:2,100',
            "alamat"      => 'required|string|between:2,100',
            "agama"       => 'required|string|between:2,100',
            "tahun_masuk" => 'required|between:2,100',
            "kelas"       => 'required|between:1,100',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $siswa = Siswa::create($validator->validated());

        // User::where("id", $request->id_user)->update(["kode_instansi" => auth()->user()->kode_instansi, 'user_join' => 1]);
        return response()->json([
            'message'    => 'User successfully',
            'response'   => $siswa,
            "status"     => true
        ], 200);
    }
    public function updates(Request $request)
    {
        try {
            $data = $request->all();
            $nis = $request->nis;
            $ss = Siswa::where(["nis" => $nis])->first();
            if (auth()->user()->role != 'INSTANSI' && auth()->user()->kode_instansi == $ss['kode_instansi']) {
                return response()->json(['error' => 'You don\'t have access', "status"     => false], 401);
            }

            $validator = Validator::make($data, [
                "nis"         => 'required|string|between:2,100',
                "nama_siswa"  => 'required|string|between:1,100',
                "jk"          => 'required|string|between:1,100',
                "tgl_lahir"   => 'required|string|between:2,100',
                "alamat"      => 'required|string|between:2,100',
                "agama"       => 'required|string|between:2,100',
                "tahun_masuk" => 'required|between:2,100',
                "kelas"       => 'required|between:1,100',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }

            $siswa = Siswa::where(["nis" => $nis])->first();
            if (!empty($siswa->id_user)) {
                $uploads = $this->Upgambar($request, 'filesss', '/Assets/img/user/');
                if ($uploads['status'] == false) {
                    $uploads = 'default.jpg';
                }
                $imges = User::where('id', $siswa['id_user'])->update(["foto" => $uploads]);
            }

            $sis =  Siswa::where(["nis" => $nis])->update($validator->validated());

            return response()->json([
                'message'    => 'User successfully',
                'response'   => $validator->validated(),
                "status"     => $sis == 1 ? true : false
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(["response" => "error", "msg" => "server error"], 500);
        }
    }
    public function deleteSiswa($nis)
    {
        try {
            $sis = Siswa::where(["nis" => $nis])->first();
            User::where('id', $sis->id_user)->delete();
            $del = Siswa::where(["nis" => $nis])->delete();
            return response()->json([
                'message'    => 'delete successfully',
                "status"     => $del == 1 ? true : false
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(["response" => "error", "msg" => "server error"], 500);
        }
    }

    public function getSiswaTable($nis = null)
    {
        try {
            if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
                return response()->json(['error' => 'You don\'t have access'], 401);
            }
            $get = DB::table('tbl_siswa');
            $get->select(DB::raw('nis,id_user,nama_siswa,tgl_lahir,jk,kelas'));

            if (!empty($_GET['nis'])) {
                $get->where('tbl_siswa.nis', 'like', '%' . $_GET['nis'] . '%');
            }
            if (!empty($_GET['nama-siswa'])) {
                $get->where('tbl_siswa.nama_siswa', 'like', '%' . $_GET['nama-siswa'] . '%');
            }
            if (!empty($_GET['tahun-masuk'])) {
                $get->where('tbl_siswa.tahun_masuk', 'like', '%' . $_GET['tahun-masuk'] . '%');
            }


            $get->where('kode_instansi', auth()->user()->kode_instansi);
            $result = $get->get();

            $__ = [];
            foreach ($result as $value) {
                $btnPass = '';
                $btnAddSaldo = '';
                $namaSiswaSet = '';
                if (!empty($value->id_user)) {
                    $namaSiswaSet = $value->nama_siswa . '<div class="badge badge-success" style="font-size:.6em; float:right;">Connected</div>';
                    $btnPass = '<button class="btn btn-outline-primary btn-sm" onClick="updatePass(\'' . $value->nis . '\')"><i class="fa fa-key"></i></button> ';
                    $btnAddSaldo = '<button class="btn btn-success btn-sm ml-2" style="margin-right:10px;" onClick="addSaldoSiswa(\'' . $value->nis . '\')">Detail</button>';
                } else {
                    $namaSiswaSet = $value->nama_siswa . '<div class="badge badge-dark" style="font-size:.6em;float:right;">Not Connected</div>';
                    $btnPass = '<button class="btn btn-dark btn-disable btn-sm""><i class="fa fa-key"></i></button> ';
                    $btnAddSaldo = '<button class="btn btn-success btn-sm ml-2" style="margin-right:10px;" onClick="notConnected()">Detail</button>';
                }

                $data___ = [
                    $value->nis,
                    $namaSiswaSet,
                    $value->tgl_lahir,
                    Carbon::parse($value->tgl_lahir)->age . ' Tahun',
                    $value->kelas,
                    !empty($value->id_user) ? "Rp " . number_format(User::where('id', $value->id_user)->first()->saldo, 0, ',', '.') : '-',
                    '<div style="display: flex ; justify-content: space-between; align-items: center">
                    <div>
                    ' . $btnPass . '
                    <button class="btn btn-primary btn-sm" onClick="updateSiswa(' . $value->nis . ')"><i class="fa fa-edit"></i></button> 
                    <button class="btn btn-danger btn-sm ml-2" onClick="deleteSiswa(' . $value->nis . ')"><i class="fa fa-trash"></i></button>
                    </div>
                    ' . $btnAddSaldo . '
                    </div> 
                    '
                ];
                array_push($__, $data___);
            }
            $array_respon_datatable = [
                "draw" => 1,
                "recordsTotal" => count($result),
                "recordsFiltered" => count($result),
                "data" => $__
            ];

            return response()->json($array_respon_datatable, 200);
        } catch (\Throwable $th) {
            return response()->json(["response" => "error", "msg" => "server error"], 500);
        }
    }
    public function getSiswaTableConnet($nis = null)
    {
        try {
            if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
                return response()->json(['error' => 'You don\'t have access'], 401);
            }
            $get = DB::table('tbl_siswa');
            $get->select(DB::raw('nis,nama_siswa,tgl_lahir,jk,kelas'));
            $get->join('users', function ($join) {
                $join->on('users.id', '=', 'tbl_siswa.id_user');
            });

            if (!empty($_GET['nis'])) {
                $get->where('tbl_siswa.nis', 'like', '%' . $_GET['nis'] . '%');
            }
            if (!empty($_GET['nama-siswa'])) {
                $get->where('tbl_siswa.nama_siswa', 'like', '%' . $_GET['nama-siswa'] . '%');
            }
            if (!empty($_GET['tahun-masuk'])) {
                $get->where('tbl_siswa.tahun_masuk', 'like', '%' . $_GET['tahun-masuk'] . '%');
            }


            $get->where('tbl_siswa.kode_instansi', auth()->user()->kode_instansi);
            $result = $get->get();



            $__ = [];
            foreach ($result as $value) {
                $data___ = [
                    "<small>" . $value->nis . "</small><br/>" . $value->nama_siswa,

                    $value->kelas,
                    '<div class="badge badge-success">Connected</div>'
                ];
                array_push($__, $data___);
            }
            $array_respon_datatable = [
                "draw" => 1,
                "recordsTotal" => count($result),
                "recordsFiltered" => count($result),
                "data" => $__
            ];

            return response()->json($array_respon_datatable, 200);
        } catch (\Throwable $th) {
            return response()->json(["response" => "error", "msg" => "server error"], 500);
        }
    }

    public function getSiswa()
    {
        try {
            if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN" &&  auth()->user()->role != "KANTIN" && auth()->user()->role != "WALI") {
                return response()->json(['error' => 'You don\'t have access'], 401);
            }
            $get = DB::table('tbl_siswa');
            // $get->select(DB::raw('nis,nama_siswa,tgl_lahir,jk,kelas'));

            $get->join('users', function ($join) {
                $join->on('users.id', '=', 'tbl_siswa.id_user');
            });
            if (!empty($_GET['nis'])) {
                $get->where('tbl_siswa.nis', 'like', '%' . $_GET['nis'] . '%');
            }
            if (!empty($_GET['nama-siswa'])) {
                $get->where('tbl_siswa.nama_siswa', 'like', '%' . $_GET['nama-siswa'] . '%');
            }
            if (!empty($_GET['tahun-masuk'])) {
                $get->where('tbl_siswa.tahun_masuk', 'like', '%' . $_GET['tahun-masuk'] . '%');
            }
            if (!empty($_GET['qr_code'])) {
                $get->where('users.qr_code', 'like', '%' . $_GET['qr_code'] . '%');
            }
            if (!empty($_GET['kode-instansi'])) {
                $get->where('users.kode_instansi', 'like', '%' . $_GET['kodei-nstansi'] . '%');
            }
            if (!empty($_GET['username'])) {
                $get->where('users.username', 'like', '%' . $_GET['username'] . '%');
            }
            if (!empty($_GET['status'])) {
                $get->where('users.status', 'like', '%' . $_GET['status'] . '%');
            }
            $get->where('users.kode_instansi', auth()->user()->kode_instansi);
            if (!empty($_GET['qr_code']) && $_GET['qr_code']) {
                $result = $get->first();
            } elseif (!empty($_GET['nis']) && $_GET['nis']) {
                $is = $get->get();
                if (count($is) > 1) {
                    $result = $get->get();
                } else {
                    $result = $get->first();
                }
            } else {
                $result = $get->get();
            }

            return response()->json($result, 200);
        } catch (\Throwable $th) {
            return response()->json(["response" => "error", "msg" => "server error"], 500);
        }
    }


    public function getSiswaOne()
    {
        try {
            if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
                return response()->json(['error' => 'You don\'t have access'], 401);
            }
            $get = DB::table('tbl_siswa');
            if (!empty($_GET['nis'])) {
                $get->where('tbl_siswa.nis', 'like', '%' . $_GET['nis'] . '%');
            }
            if (!empty($_GET['nama-siswa'])) {
                $get->where('tbl_siswa.nama_siswa', 'like', '%' . $_GET['nama-siswa'] . '%');
            }
            if (!empty($_GET['tahun-masuk'])) {
                $get->where('tbl_siswa.tahun_masuk', 'like', '%' . $_GET['tahun-masuk'] . '%');
            }

            $get->where('kode_instansi', auth()->user()->kode_instansi);
            $result = $get->first();
            return response()->json($result, 200);
        } catch (\Throwable $th) {
            return response()->json(["response" => "error", "msg" => "server error"], 500);
        }
    }


    public function siswaQrCode(Request $request)
    {
        $get = DB::table('tbl_siswa')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'tbl_siswa.id_user');
            })
            ->where('users.qr_code', $request->qrCode)
            ->first();

        return response()->json($get);
    }
    public function siswaQrCodePin(Request $request)
    {
        $get = DB::table('tbl_siswa')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'tbl_siswa.id_user');
            })
            ->where('users.qr_code', $request->qrCode)
            ->where('users.pin', $request->pin)
            ->first();

        return response()->json($get);
    }
    public function siswaPin(Request $request)
    {
        $get = DB::table('tbl_siswa')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'tbl_siswa.id_user');
            })
            ->where('users.pin', $request->pin)
            ->first();
        if (empty($get)) {
            return response()->json([
                'message' => 'data not found',
            ], 401);
        }
        return response()->json($get);
    }

    public function getSiswaNoJoin()
    {
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $get = DB::table('tbl_siswa');
        if (!empty($_GET['nis'])) {
            $get->where('tbl_siswa.nis', 'like', '%' . $_GET['nis'] . '%');
        }
        if (!empty($_GET['nama-siswa'])) {
            $get->where('tbl_siswa.nama_siswa', 'like', '%' . $_GET['nama-siswa'] . '%');
        }
        if (!empty($_GET['tahun-masuk'])) {
            $get->where('tbl_siswa.tahun_masuk', 'like', '%' . $_GET['tahun-masuk'] . '%');
        }
        $get->where('tbl_siswa.kode_instansi', auth()->user()->kode_instansi);
        $result = $get->get();

        return response()->json([
            "status" => true,
            "response" => $result
        ]);
    }

    public function getSiswaRelation($id_user)
    {
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != "WALI") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        $get = DB::table('tbl_siswa');
        $get->join('users', function ($join) {
            $join->on('users.id', '=', 'tbl_siswa.id_user');
        });
        if (!empty($_GET['nis'])) {
            $get->where('tbl_siswa.nis', 'like', '%' . $_GET['nis'] . '%');
        }
        if (!empty($_GET['nama-siswa'])) {
            $get->where('tbl_siswa.nama_siswa', 'like', '%' . $_GET['nama-siswa'] . '%');
        }
        if (!empty($_GET['tahun-masuk'])) {
            $get->where('tbl_siswa.tahun_masuk', 'like', '%' . $_GET['tahun-masuk'] . '%');
        }
        $get->where('tbl_siswa.kode_instansi', auth()->user()->kode_instansi);
        $get->where('users.id', $id_user);
        $result = $get->first();

        return response()->json([
            "status" => true,
            "response" => [
                "result" => $result,
                "riwayat_transaksi" => RiwayatSaldo::where(["id_user" => $id_user])->orderBy('created_at', 'desc')->get()
            ]
        ]);
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
}
