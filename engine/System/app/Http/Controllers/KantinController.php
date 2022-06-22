<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Kantin;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Helper\Helpers as Helper;
use App\Models\RiwayatSaldo;
use App\Models\Transaksi;


class KantinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }

    public function Created(Request $request)
    {
        // try {
        $data = $request->all();
        $code_generate = !empty($data['code_generate']) ? $data['code_generate'] : null;
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != 'KANTIN') {
            return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
        }


        // code Card
        if (empty($code_generate)) {
            $code_generate = Str::random(40);
        }

        // username is null
        if (empty($data['username'])) {
            $username = "SISWA_" . Str::random(4);
            while (User::where('username', $username)->count() > 0) {
                $username = "SISWA_" . Str::random(4);
            }
        } else {
            $username = $data["username"];
        }


        // upload image ======
        $uploads = $this->Upgambar($request, 'filesss', '/Assets/img/user/');
        if ($uploads['status'] == false) {
            $uploads = 'default.jpg';
        }

        // remember token 
        $random = Str::random(40);

        $data = [
            'kode_instansi' => auth()->user()->kode_instansi,
            'username' => $username,
            'role' => "KANTIN",
            'password' => bcrypt($data['password']),
            "pin" => "123456",
            "qr_code" => $code_generate,
            "remember_token" => $random,
            "status_user" => "isActive",
            "user_join" => 1,
            "name_table_join" => 'kantin',
            "saldo" => $data['saldo'],
            'foto' => $uploads
        ];

        $validator = Validator::make($data, [
            'username' => 'required|string|max:100|unique:users',
            "qr_code"  => 'required|string|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create($data);

        $___data  = [
            "kode_instansi" =>  auth()->user()->kode_instansi,
            "user_id"       => $user['id'],
        ];
        $___data += $request->all();

        $validator = Validator::make($___data, [
            "kode_instansi"     => 'required',
            "user_id"           => 'required|between:1,100|unique:kantin',
            "nama_kantin"       => 'required',
            "nama_pemilik"      => 'required',
            "no_telp"           => 'required',
            "alamat_pemilik"    => 'required',
            "deskripsi_kantin"  => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $valid = $validator->validated();

        // $uploads = $this->Upgambar($request->gambar_kantin, 'gambar_kantin', '/Assets/img/kantin/');
        // if ($uploads['status'] == true) {
        //     $valid += ["gambar_kantin" => $uploads['fileName']];
        // } else {
        $valid += ["gambar_kantin" => 'default.jpg'];
        // }
        $instansi = Kantin::create($valid);
        User::where("id", $instansi->user_id)->update(['user_join' => 1]);
        return response()->json([
            'message' => 'User successfully',
            'status'  => true,
            'response' => $instansi
        ], 200);
    }
    public function Updated(Request $request)
    {
        $data = $request->all();
        if (!empty($data['id_user'])) {
            $use = User::where('id', $data['id_user'])->first();
        } else {
            $use = User::where('id', auth()->user()->id)->first();
        }
        $code_generate = !empty($data['code_generate']) ? $data['code_generate'] : null;
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
        }
        // code Card
        if (empty($code_generate)) {
            $code_generate = Str::random(40);
        }
        $username = $data["username"];
        // remember token 
        $random = Str::random(40);

        $slfdata = [
            'kode_instansi' => auth()->user()->kode_instansi,
            'username' => $username,
            'role' => "KANTIN",
            "pin" => $data['pin'],
            "qr_code" => $code_generate,
            "status_user" => "isActive",
            "user_join" => 1,
            "name_table_join" => 'kantin',
            "saldo" => $data['saldo'],
        ];

        $imgs = Helper::Upgambar($request, 'filess', "/Assets/img/user/");
        if ($imgs['status'] != false) {
            $slfdata += ["foto" => $imgs['fileName']];
        }


        if ($use['username'] == $username) {
            $validator = Validator::make($slfdata, [
                'username' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
        } else if ($use['qr_code'] == $code_generate) {
            $validator = Validator::make($slfdata, [
                "qr_code"  => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
        } else {
            $validator = Validator::make($data, [
                'username' => 'required|string|max:100|unique:users',
                "qr_code"  => 'required|string|unique:users',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
        }

        if (!empty($data['password'])) {
            $slfdata += ["password" => bcrypt($data['password'])];
        }

        $user = User::where('id', $data['id_user'])->update($slfdata);

        $___data  = [
            "kode_instansi" =>  auth()->user()->kode_instansi,
            "user_id"       => $data['id_user'],
        ];
        $___data += $request->all();

        $validator = Validator::make($___data, [
            "kode_instansi"     => 'required',
            "nama_kantin"       => 'required',
            "nama_pemilik"      => 'required',
            "no_telp"           => 'required',
            "alamat_pemilik"    => 'required',
            "deskripsi_kantin"  => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $valid = $validator->validated();
        $instansi = Kantin::where('user_id', $data['id_user'])->update($valid);
        return response()->json([
            'message' => 'baerhasil di update',
            'status'  => true,
            'response' => $instansi
        ], 200);
    }
    public function updateByUser(Request $request)
    {
        $data = $request->all();

        $id = auth()->user()->id;
        $use = User::where('id', auth()->user()->id)->first();
        if (auth()->user()->role != "KANTIN") {
            return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
        }
        // users ========> 
        $username = $data["username"];
        $slfdata = [
            'username' =>  $data["username"],
            "pin" => $data['pin'],
        ];

        if ($use['username'] == $username) {
            $validator = Validator::make($slfdata, [
                'username' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
        } else {
            $validator = Validator::make($data, [
                'username' => 'required|string|max:100|unique:users',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
        }

        if (!empty($data['password'])) {
            $slfdata += ["password" => bcrypt($data['password'])];
        }

        $user = User::where('id', $id)->update($slfdata);
        // ----------------------

        $___data  = [
            "kode_instansi" =>  auth()->user()->kode_instansi,
            "user_id"       => $id,
        ];
        $___data += $request->all();

        $validator = Validator::make($___data, [
            "nama_kantin"       => 'required',
            "nama_pemilik"      => 'required',
            "no_telp"           => 'required',
            "alamat_pemilik"    => 'required',
            "deskripsi_kantin"  => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $valid = $validator->validated();
        $kantin = Kantin::where('user_id', $id)->update($valid);
        return response()->json([
            'message' => 'baerhasil di update',
            'status'  => true,
            'response' => $kantin
        ], 200);
    }

    public function Upgambar($request, $nameFile, $path)
    {
        $val = $request;
        if ($request->hasFile($nameFile)) {
            $validator = Validator::make($val, [
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
    public function get($slug = null)
    {

        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN" &&  auth()->user()->role != "KANTIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        if (auth()->user()->role == "KANTIN") {
            $slug = Kantin::where('user_id', auth()->user()->id)->first()->id_kantin;
        }
        $get = DB::table('kantin');
        $get->join('users', function ($join) {
            $join->on('users.id', '=', 'kantin.user_id');
        });
        $get->orderBy('kantin.created_at');
        $get->where('users.kode_instansi', auth()->user()->kode_instansi);
        $get->where('users.status_user', 'isActive');
        if (!empty($slug)) {
            $get->where('kantin.id_kantin', $slug);
            $result = $get->first();
        } else {
            $result = $get->get();
        }

        return response()->json($result, 200);
    }
    public function RiwayatPembelian($slug = null)
    {

        $kantin = DB::table('kantin')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'kantin.user_id');
            })
            ->where('users.kode_instansi', auth()->user()->kode_instansi)
            ->where('kantin.user_id', auth()->user()->id)
            ->first();

        $get = DB::table('troli');
        $get = $get->select(['*', 'troli.created_at as created_at', 'troli.updated_at as updated_at']);
        $get = $get->join('users', function ($join) {
            $join->on('users.id', '=', 'troli.id_user');
        });
        $get = $get->join('product', function ($join) {
            $join->on('product.id_product', '=', 'troli.id_product');
        });
        $get = $get->join('kategori', function ($join) {
            $join->on('kategori.id_kategori', '=', 'product.kategori_produk');
        });
        if (!empty($slug)) {
            $get = $get->where('troli.id_user', $slug);
        }
        if (!empty($_GET['faktur'])) {
            $get = $get->where('troli.no_faktur', $_GET['faktur']);
        }
        if (!empty($_GET['tanggal'])) {
            $get = $get->whereDate('troli.created_at', $_GET['tanggal']);
        }
        if (!empty($_GET['qr'])) {
            $get = $get->where('users.qr_code', $_GET['qr']);
        }
        $get = $get->where('troli.id_kantin', Kantin::where('user_id', auth()->user()->id)->first()->id_kantin);
        $get = $get->orderBy('troli.created_at', 'DESC');
        $get = $get->get();

        $cekUs = "";
        if (!empty($_GET['faktur'])) {
            $cekUs = DB::table('users')
                ->join('transaksi_kantin', function ($join) {
                    $join->on('transaksi_kantin.id_user', '=', 'users.id');
                })
                ->where('transaksi_kantin.kode_faktur', $_GET['faktur'])->first();
        }

        $riwayat = $this->objectToArray($get);


        $data_riwayat = [];
        foreach ($riwayat as $value) {
            array_push($data_riwayat, array_merge($value, [
                "nama_user" => $this->joinedUser($value['id_user'])["nama_user"]
            ]));
        }

        return response()->json([
            "kantin" => $kantin,
            "troli" => $data_riwayat,
            "pelanggan" => !$cekUs == "" ? $this->joinedUser($cekUs->id_user) : ""
        ]);
    }
    public static function objectToArray(&$object)
    {
        return @json_decode(json_encode($object), true);
    }


    // public function RiwayatTransaksiKantin($slug = null)
    // {
    //     if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
    //         return response()->json(['error' => 'You don\'t have access'], 401);
    //     }
    //     $data_kantin = Kantin::where('user_id', $slug)->first();
    //     $kantin = DB::table('kantin')
    //         ->join('users', function ($join) {
    //             $join->on('users.id', '=', 'kantin.user_id');
    //         })
    //         ->where('users.kode_instansi', auth()->user()->kode_instansi)
    //         ->where('kantin.user_id', $data_kantin->user_id)
    //         ->first();

    //     $_get = DB::table('transaksi_kantin');
    //     $_get = $_get->select(['*', 'transaksi_kantin.created_at as created_at', 'transaksi_kantin.updated_at as updated_at']);
    //     $_get = $_get->join('users', function ($join) {
    //         $join->on('users.id', '=', 'transaksi_kantin.id_user');
    //     });
    //     $_get = $_get->where('transaksi_kantin.user_kantin', $data_kantin->id_kantin);
    //     $_get = $_get->get();
    //     $results = [];
    //     foreach ($_get as $value) {
    //         $get = DB::table('troli');
    //         $get = $get->select(['*', 'troli.created_at as created_at', 'troli.updated_at as updated_at']);
    //         $get = $get->join('users', function ($join) {
    //             $join->on('users.id', '=', 'troli.id_user');
    //         });
    //         $get = $get->join('product', function ($join) {
    //             $join->on('product.id_product', '=', 'troli.id_product');
    //         });
    //         $get = $get->join('kategori', function ($join) {
    //             $join->on('kategori.id_kategori', '=', 'product.kategori_produk');
    //         });
    //         $get = $get->where('troli.no_faktur', $value->kode_faktur);
    //         $get = $get->where('troli.id_kantin', $data_kantin->id_kantin);
    //         $get = $get->orderBy('troli.created_at', 'DESC');
    //         $get = $get->get();
    //         array_push($results, ["transaksi" => $value, "item" =>  $get]);
    //     }

    //     return response()->json([
    //         "kantin" => $kantin,
    //         "riwayat" => $results
    //     ]);
    // }

    public function RiwayatTransaksiKantin($slug = null)
    {
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $data_kantin = Kantin::where('user_id', $slug)->first();
        $kantin = DB::table('kantin')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'kantin.user_id');
            })
            ->where('users.kode_instansi', auth()->user()->kode_instansi)
            ->where('kantin.user_id', $data_kantin->user_id)
            ->first();

        $_get = DB::table('transaksi_kantin');
        $_get = $_get->select(['*', 'transaksi_kantin.created_at as created_at', 'transaksi_kantin.updated_at as updated_at']);
        $_get = $_get->join('users', function ($join) {
            $join->on('users.id', '=', 'transaksi_kantin.id_user');
        });
        $_get = $_get->where('transaksi_kantin.user_kantin', $data_kantin->id_kantin);
        $_get = $_get->get();
        $results = [];
        foreach ($_get as $value) {
            $get = DB::table('troli');
            $get = $get->select(['*', 'troli.created_at as created_at', 'troli.updated_at as updated_at']);
            $get = $get->join('users', function ($join) {
                $join->on('users.id', '=', 'troli.id_user');
            });
            $get = $get->join('product', function ($join) {
                $join->on('product.id_product', '=', 'troli.id_product');
            });
            $get = $get->join('kategori', function ($join) {
                $join->on('kategori.id_kategori', '=', 'product.kategori_produk');
            });
            $get = $get->where('troli.no_faktur', $value->kode_faktur);
            $get = $get->where('troli.id_kantin', $data_kantin->id_kantin);
            $get = $get->orderBy('troli.created_at', 'DESC');
            $get = $get->get();
            array_push($results, ["transaksi" => $value, "item" =>  $get]);
        }

        return response()->json([
            "kantin" => $kantin,
            "riwayat" => $results
        ]);
    }
    public function UpdateImage(Request $request)
    {
        $reqs = $request->all();
        $uploaded = Helper::Upgambar($request, 'image', '/Assets/img/user/');
        if ($uploaded['status'] == false) {
            return response()->json([
                'message' => 'gagal mengedit foto , sepertinya ada kesalahan fatal',
                'status'  => false,
                'response' => []
            ], 401);
        }

        User::where('id', $reqs['id'])->update([
            "foto" => $uploaded['fileName']
        ]);

        return response()->json([
            'message' => 'foto baerhasil di edit',
            'status'  => true,
            'response' => ["fileName" => $uploaded['fileName']]
        ], 200);
    }
    public function getByAuth()
    {

        if (auth()->user()->role != "KANTIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $get = DB::table('kantin');
        $get->join('users', function ($join) {
            $join->on('users.id', '=', 'kantin.user_id');
        });
        $get->orderBy('kantin.created_at');
        $get->where('users.kode_instansi', auth()->user()->kode_instansi);
        $get->where('kantin.id_kantin', Kantin::where('user_id', auth()->user()->id)->first()->id_kantin);
        $result = $get->first();
        return response()->json($result, 200);
    }
    public function Delete($slug)
    {
        try {
            if (auth()->user()->role != "INSTANSI" && auth()->user()->role != "SUPER_ADMIN") {
                return response()->json(['error' => 'You don\'t have access'], 401);
            }
            User::where('id', $slug)->update([
                'status_user' => 'non_active'
            ]);

            return response()->json([
                'message' => 'delete kantin is success',
                'status'  => true,
                'response' => []
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'delete is error',
                'status'  => false,
                'response' => []
            ], 401);
        }
    }
    public function joinedUser($id_user)
    {
        $cek = User::where('id', $id_user)->first();
        if (empty($cek->name_table_join)) {
            return [
                "msg" => "data user ini tidk lengkap",
                "status" => 'error'
            ];
        }
        switch ($cek->name_table_join) {
            case 'kantin':
                $get = DB::table('users')
                    ->select(['*', 'kantin.nama_kantin as nama_user', 'kantin.alamat_pemilik as alamat_user'])
                    ->join('kantin', function ($join) {
                        $join->on('kantin.user_id', '=', 'users.id');
                    })

                    ->where('users.id', $id_user)
                    ->first();
                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                $gets += ["status_level" => "Kantin"];
                return $gets;
                break;

            case 'siswa':
                $get = DB::table('users')
                    ->select(['*', 'tbl_siswa.nama_siswa as nama_user', 'tbl_siswa.alamat as alamat_user'])
                    ->join('tbl_siswa', function ($join) {
                        $join->on('tbl_siswa.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();
                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                $gets += ["status_level" => "Siswa"];
                return $gets;
                break;
            case 'staff':
                $get = DB::table('users')
                    ->select(['*', 'staff.nama_lengkap as nama_user'])
                    ->join('staff', function ($join) {
                        $join->on('staff.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();

                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                $gets += ["status_level" => "Guru / Staff"];
                return $gets;
                break;
            default:
                $users = User::where('id', $id_user)->first();
                return $users;
                break;
        }
    }
}
