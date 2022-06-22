<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Instansi;
use Illuminate\Support\Facades\DB;
use App\Models\Kantin;
use App\Models\tbl_siswa;
use App\Models\RiwayatSaldo;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'qrCode', 'loginTime']]);
    }
    public function userChecks()
    {
        return response()->json(['error' => 'null', 'response' => 'anda sudah login', 'status' => true], 200);
    }

    public function login(Request $request)
    {
        if (!empty($request->email)) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|string',
            ]);
        }
        if (!empty($request->username)) {
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required|string',
            ]);
        }

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->attempt(array_merge($validator->validated(), ['status_user' => 'isActive']))) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }
    public function loginTime(Request $request)
    {
        if (!empty($request->username)) {
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required|string|min:6',
            ]);
        }

        if (!$token = auth()->attempt(array_merge($validator->validated(), ['status_user' => 'isActive']))) {
            return response()->json(['error' => 'Unauthorized', 'status' => false], 401);
        }
        return response()->json(["status" => true], 200);
    }

    public function qrCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'qr_code' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $user = User::where($validator->validated())->first();

        if (empty($user)) {
            return response()->json(['error' => 'no result data', 'status' => false], 401);
        }

        $eres = $this->getUserJoin($user->id);

        return response()->json([
            'message' => 'data is result',
            'response' => $eres
        ], 200);
    }
    public function qrCodePin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'qr_code' => 'required',
            'pin' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $user = User::where($validator->validated())->first();
        if (empty($user)) {
            return response()->json(['error' => 'no result data', 'status' => false], 401);
        }

        $eres = $this->getUserJoin($user->id);

        return response()->json([
            'message' => 'data is result',
            'response' => $eres
        ], 200);
    }

    public function genUser($jumlah)
    {
        // generator user free from super admin
        if (auth()->user()->role != "SUPER_ADMIN" || auth()->user()->role != "INSTANSI") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $data_back = [];
        for ($i = 1; $i <= $jumlah; $i++) {
            $random = Str::random(40);
            $username = "SISWA_" . Str::random(4);
            $data = [
                'username' => User::where('username', $username)->count() == 0 ? $username : "SISWA_" . Str::random(4),
                'role' => 'SISWA',
                'password' => bcrypt('digital'),
                "pin" => "123456",
                "qr_code" => Str::random(40),
                "remember_token" => $random,
                "status_user" => "isActive",
                "user_join" => 0,
                'foto' => 'default.jpg',
                'saldo' => 0,
                'name_table_join' => 'tbl_siswa'

            ];
            $user = User::create($data);

            array_push($data_back, $user);
        }
        return response()->json(['message' => 'User successfully generate', "response" => $data_back], 201);
    }

    public function getDataUserReady()
    {
        if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != "INSTANSI") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $get = User::where('kode_instansi', null)->where('user_join', 0)->get();
        return response()->json($get);
    }


    public function register(Request $request)
    {
        $data = $request->all();

        if (auth()->user()->role == "SUPER_ADMIN") {
        } else if (auth()->user()->role == "INSTANSI") {
            if (!empty($data['kode_instansi'])) {
                unset($data['kode_instansi']);
            }
            $data += ["kode_instansi" => auth()->user()->kode_instansi];
        } elseif (auth()->user()->role == "KANTIN" && !empty($data['kode_instansi'])) {
            unset($data['kode_instansi']);
        } else {
            return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
        }

        $validator = Validator::make($data, [
            'email' => 'string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
            'username' => 'required|string|max:100|unique:users',
            'role' => 'required|string',

        ]);
        $random = Str::random(40);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $uploads = $this->Upgambar($request, 'filesss', '/Assets/img/user/');
        if ($uploads['status'] == false) {
            $uploads = "default.jpg";
            // return response()->json(["response" => "error", "msg" => "gambar tidak boleh kosong"], 400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            [
                'kode_instansi' => $data['kode_instansi'],
                'password' => bcrypt($request->password),
                "pin" => "123456",
                "qr_code" => Str::random(40),
                "remember_token" => $random,
                "status_user" => "isActive",
                "user_join" => 0,
                'foto' => $uploads,
                'saldo' => 0,
                'name_table_join' => $data["role"] == "INSTANSI" ? 'instansi' : 'tbl_siswa'
            ]
        ));

        return response()->json([
            'message' => 'User successfully registered',
            'status' => true,
            'response' => $user,
        ], 201);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

    public function refresh()
    {
        return $this->createNewToken(auth()->refresh());
    }

    public function userProfile()
    {
        return response()->json(auth()->user());
    }

    protected function createNewToken($token)
    {
        $auth_data = auth()->user();

        if ($auth_data->role == 'INSTANSI' && Instansi::where('user_id', $auth_data->id)->count() > 0) {
            $auth_data = DB::table('users')
                ->where('users.id', $auth_data->id)
                ->join('instansi', function ($join) {
                    $join->on('instansi.user_id', '=', 'users.id');
                })
                ->first();
        } elseif ($auth_data->role == 'KANTIN' && Kantin::where('user_id', $auth_data->id)->count() > 0) {
            $auth_data = DB::table('users')
                ->where('users.id', $auth_data->id)
                ->join('kantin', function ($join) {
                    $join->on('kantin.user_id', '=', 'users.id');
                })
                ->first();
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 100000000,
            'user' => $auth_data

        ]);
    }
    public function updateDataUser(Request $request)
    {
        if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != "INSTANSI") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        if ($request->fild == 'useraname') {
            $validator = Validator::make($request->all(), [
                'username' => 'required|string|max:100|unique:users',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            $upUs = User::where('id', $request->id)->where('role', '!=', 'SUPER_ADMIN')->update(["username" => $request->useranme]);
            if ($upUs) {
                return response()->json([
                    'message' => 'User successfully update',
                    "status" => true
                ], 201);
            } else {
                return response()->json(['message' => 'error update', "status" => false], 422);
            }
        } else if ($request->fild == 'password') {
            $validator = Validator::make($request->all(), [
                'password' => 'required|string|confirmed|min:6',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            $upUs = User::where('id', $request->id)->where('role', '!=', 'SUPER_ADMIN')->update(["password" =>  bcrypt($request->password)]);
            if ($upUs) {
                return response()->json([
                    'message' => 'User successfully update',
                    "status" => true
                ], 201);
            } else {
                return response()->json(['message' => 'error update', "status" => false], 422);
            }
        } else if ($request->fild == 'qrCode') {
            $random = Str::random(40);
            $upUs = User::where('id', $request->id)->where('role', '!=', 'SUPER_ADMIN')->update(["qr_code" =>  $random]);
            if ($upUs) {
                return response()->json([
                    'message' => 'User successfully update',
                    'qr_code' => $random,
                    "status" => true
                ], 201);
            } else {
                return response()->json(['message' => 'error update', "status" => false], 422);
            }
        } else if ($request->fild == 'email') {
            $validator = Validator::make($request->all(), [
                'email' => 'string|email|max:100|unique:users',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            $upUs = User::where('id', $request->id)->where('role', '!=', 'SUPER_ADMIN')->update(["email" => $request->email]);
            if ($upUs) {
                return response()->json([
                    'message' => 'User successfully update',
                    "status" => true
                ], 201);
            } else {
                return response()->json(['message' => 'error update', "status" => false], 422);
            }
        } else if ($request->fild == 'pin') {
            $validator = Validator::make($request->all(), [
                'pin' => 'required|min:4',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            $upUs = User::where('id', $request->id)->update(["pin" => $request->pin]);
            if ($upUs) {
                return response()->json([
                    'message' => 'User successfully update',
                    "status" => true
                ], 201);
            } else {
                return response()->json(['message' => 'error update', "status" => false], 422);
            }
        } else if ($request->fild == 'kode_instansi') {
            $validator = Validator::make($request->all(), [
                'kode_instansi' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }
            $upUs = User::where('id', $request->id)->where('role', '!=', 'SUPER_ADMIN')->update(["kode_instansi" => $request->kode_instansi]);
            if ($upUs) {
                return response()->json([
                    'message' => 'User successfully update',
                ], 201);
            } else {
                return response()->json(['message' => 'error update',], 422);
            }
        }
    }
    public function userDeletes($user_id)
    {

        $us = User::where(["id" => $user_id])->first();

        switch ($us['role']) {
            case 'INSTANSI':

                return "ins";

                break;
            case 'KANTIN':

                return "kan";

                break;
            case 'SISWA':

                return "sis";

                break;
            default:

                break;
        }
    }
    public function Join_card(Request $request)
    {
        $req = $request->all();
        $table = $req['table'];
        $primary = $req['primary'];
        $code_generate = $req['code_generate'];
        $kode_instansi = !empty($req['kode_instansi']) ? $req['kode_instansi'] : null;
        $saldo = !empty($req['saldo']) ? $req['saldo'] : 0;

        if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != "INSTANSI") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }


        if ($table == 'siswa') {
            $cek = tbl_siswa::where(['nis' => $primary])->first();
            $res = [];
            if (!empty($cek->id_user)) {
                $get = DB::table('tbl_siswa');
                $get->join('users', function ($join) {
                    $join->on('users.id', '=', 'tbl_siswa.id_user');
                });
                $get->join('riwayat_saldo', function ($join) {
                    $join->on('riwayat_saldo.id_user', '=', 'tbl_siswa.id_user');
                });
                $get->where('tbl_siswa.nis', $primary);
                $get->where('users.kode_instansi', auth()->user()->kode_instansi);
                $res = $get->first();


                return response()->json([
                    "status" => false,
                    "msg"    => "tidak dapat menambahkan kode karna user ini telah memiliki kartu",
                    "response"  => $res
                ], 400);
            }
        }

        if (empty($kode_instansi)) {
            if (auth()->user()->role == "INSTANSI") {
                $kode_instansi =  auth()->user()->kode_instansi;
            }
        }
        if (empty($code_generate)) {
            $code_generate = Str::random(40);
        }
        $username = "SISWA_" . Str::random(4);
        $random = Str::random(40);
        while (User::where('username', $username)->count() > 0) {
            $username = "SISWA_" . Str::random(4);
        }

        $uploads = $this->Upgambar($request, 'filesss', '/Assets/img/user/');
        if ($uploads['status'] == false) {
            $uploads = 'default.jpg';
        }

        $data = [
            'kode_instansi' => $kode_instansi,
            'username' => $username,
            'role' => $table == 'siswa' ? 'SISWA' : ($table == 'instansi' ? "INSTANSI" : ($table == 'KANTIN' ? 'KANTIN' : ($table == 'guru' ? 'GURU' : null))),
            'password' => bcrypt('digital'),
            "pin" => "1234",
            "qr_code" => $code_generate,
            "remember_token" => $random,
            "status_user" => "isActive",
            "user_join" => 1,
            "name_table_join" => $table,
            "saldo" => $saldo,
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
        $saldo = [
            "id_user" => $user['id'],
            "kode_instansi" => $user['kode_instansi'],
            "tanggal" => date('Y-m-d'),
            "aksi" => "saldo_awal",
            "pesan" => "menambahkan saldo awal",
            "oleh" => auth()->user()->id,
            "saldo_awal" => $user['saldo'],
            "saldo" => $user['saldo'],
            "jumlah_aksi" => $user['saldo'],
        ];

        $riwayat = RiwayatSaldo::create($saldo);

        if ($table == 'siswa') {
            tbl_siswa::where('nis', $primary)->update([
                "id_user" => $user->id
            ]);
        }
        $res = [];
        if ($table == 'siswa') {
            $get = DB::table('tbl_siswa');
            $get->join('users', function ($join) {
                $join->on('users.id', '=', 'tbl_siswa.id_user');
            });
            $get->join('riwayat_saldo', function ($join) {
                $join->on('riwayat_saldo.id_user', '=', 'tbl_siswa.id_user');
            });
            $get->where('tbl_siswa.nis', $primary);
            $get->where('users.kode_instansi', auth()->user()->kode_instansi);
            $res = $get->first();
        }

        return response()->json([
            "status" => true,
            "msg"    => "kartu user telah di tambahkan",
            "response"  => $res
        ], 200);
    }
    public function UpdateSaldo(Request $request)
    {
        try {
            if (auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != "INSTANSI") {
                return response()->json(['error' => 'You don\'t have access'], 401);
            }
            if ($request->id_user == "INSTANSI") {
                return response()->json(['error' => 'anda tidak dapat menambah saldo sendiri'], 401);
            }
            $UserGet = User::where('id', $request->id_user)->first();
            $data = [
                "id_user" => $request->id_user,
                "saldo" => $request->saldo,
                "aksi" => $request->saldo,
                "oleh" => auth()->user()->id
            ];

            $validator = Validator::make($data, [
                'id_user' => 'required',
                "saldo"  => 'required',
                'aksi' => 'required',
                'oleh' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
            $ins = Instansi::where('kode_instansi', auth()->user()->kode_instansi)->first();

            $saldo = 0;
            $tunai = 0;
            if ($request->aksi == 'tambah') {
                $saldo = (float) $UserGet['saldo'] + $request['saldo'];
                $tunai = $ins->saldo_tunai + $request['saldo'];
            } else if ($request->aksi == 'kurang') {
                $saldo = (float) $UserGet['saldo'] - $request['saldo'];
                $tunai = $ins->saldo_tunai - $request['saldo'];
            } else {
                return reponse()->json([
                    "status" => false,
                    "msg"    => "aksi anda kurang jelas",
                ]);
            }


            $RiwayatSaldo = [
                "id_user" => $request->id_user,
                "kode_instansi" => auth()->user()->kode_instansi,
                "tanggal" => date('Y-m-d'),
                "aksi" => $request->aksi,
                "pesan" => $request->pesan,
                "oleh" => auth()->user()->id,
                "saldo_awal" => $UserGet['saldo'],
                "saldo"  =>  $saldo,
                "jumlah_aksi" => $request['saldo'],
            ];

            $total_saldo = ["saldo" => $saldo];

            $riwayat = RiwayatSaldo::create($RiwayatSaldo);
            $user    = User::where('id', $RiwayatSaldo['id_user'])->update($total_saldo);

            Instansi::where('kode_instansi', auth()->user()->kode_instansi)->update([
                "saldo_tunai" => $tunai
            ]);

            $qr = [];
            if ($UserGet['role'] == 'SISWA') {
                $get = DB::table('tbl_siswa');
                $get->join('users', function ($join) {
                    $join->on('users.id', '=', 'tbl_siswa.id_user');
                });
                $get->where('users.id', $UserGet['id']);
                $get->where('users.kode_instansi', auth()->user()->kode_instansi);
                $qr = $get->first();
            }

            $response = [
                "user" => $qr,
                "update" => $riwayat,
                "oleh"   => User::where('id', auth()->user()->id)->first(),
                "riwayat_transaksi" => RiwayatSaldo::where('id_user', $RiwayatSaldo['id_user'])->orderBy('updated_at', 'desc')->offset(0)->limit(10)->get(),
            ];

            return response()->json([
                "status" => true,
                "msg"    => "saldo telah di tambhkan",
                "response"  => $response
            ], 200);
        } catch (\Throwable $th) {
            //throw $th;
        }
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

    public function getUserJoin($id_user)
    {
        $cek = User::where('id', $id_user)->first();
        if (empty($cek->name_table_join)) {
            return response()->json(["response" => "error", "msg" => "user ini belun terdaftar ke kartu manapun", "status" => false]);
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
                return $gets;
                break;
            case 'staff':
                $get = DB::table('users')
                    ->select(['*'])
                    ->join('staff', function ($join) {
                        $join->on('staff.id_user', '=', 'users.id');
                    })
                    ->join('guru', function ($join) {
                        $join->on('guru.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();

                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                return $gets;
                break;
            default:
                $users = User::where('id', $id_user)->first();
                return $users;
                break;
        }
    }

    public function getUserJoinByQR($qr)
    {
        $cek = User::where('qr_code', $qr)->first();
        if (empty($cek->name_table_join)) {
            return response()->json(["response" => "error", "msg" => "user ini belun terdaftar ke kartu manapun", "status" => false]);
        }
        $id_user = $cek->id;
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
                return $gets;
                break;
            case 'staff':
                $get = DB::table('users')
                    ->select(['*'])
                    ->join('staff', function ($join) {
                        $join->on('staff.id_user', '=', 'users.id');
                    })
                    ->join('guru', function ($join) {
                        $join->on('guru.id_user', '=', 'users.id');
                    })
                    ->where('users.id', $id_user)
                    ->first();

                $gets = \App\Helper\Helpers::objectToArray($get);
                unset($gets['password']);
                return $gets;
                break;
            default:
                $users = User::where('id', $id_user)->first();
                return $users;
                break;
        }
    }
    // password change
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'password' => 'required',
            'new_password' => 'required|string|confirmed',
        ]);
        if ($validator->fails()) {
            return response()->json(["status" => false, "msg" => "tidak valid"]);
        }
        $user = User::where('id', $request->id)->first();
        if (empty($user)) {
            return response()->json(["status" => false, "msg" => "user tidak ditemukan"]);
        }
        if (Hash::check($request->password, $user->password)) {
            $user->password = bcrypt($request->new_password);
            $user->save();
            return response()->json(["status" => true, "msg" => "berhasil"]);
        } else {
            return response()->json(["status" => false, "msg" => "password lama tidak sesuai"]);
        }
    }
}
