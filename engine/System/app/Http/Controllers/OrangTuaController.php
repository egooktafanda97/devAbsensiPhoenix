<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Staff;
use App\Helper\Helpers as Helper;
use App\Models\OrangTua;
use App\Models\tbl_siswa as Siswa;

class OrangTuaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }


    public function Created(Request $request)
    {

        $reqs = $request->all();
        unset($reqs['id_user']);

        $code_generate = !empty($reqs['code_generate']) ? $reqs['code_generate'] : Str::random(40);
        if (auth()->user()->role != 'INSTANSI') {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $reqs += [
            "kode_instansi" => auth()->user()->kode_instansi
        ];
        // username is null
        $username = $reqs["username"];

        // upload image ======
        $uploads = Helper::Upgambar($request, 'foto', '/Assets/img/user/');
        if ($uploads['status'] == false) {
            $uploads = 'default.jpg';
        }
        // remember token 
        $random = Str::random(40);

        $data = [
            'kode_instansi' => auth()->user()->kode_instansi,
            'username' => $username,
            'email' => $reqs['email'],
            'role' => "WALI",
            'password' => bcrypt($reqs['password']),
            "pin" => !empty($reqs['pin']) ? $reqs['pin'] : '1234',
            "qr_code" => $code_generate,
            "remember_token" => $random,
            "status_user" => "isActive",
            "user_join" => 1,
            "name_table_join" => 'orang_tua',
            "saldo" => !empty($request->saldo) ? $request->saldo : 0,
            'foto' => $uploads
        ];


        $validator = Validator::make($data, [
            'username' => 'required|string|max:100|unique:users',
            "qr_code"  => 'required|string|unique:users',
            'password' => 'required|string|min:6',
            'role'     => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create($data);

        $reqs += [
            "kode_instansi" => auth()->user()->kode_instansi,
            "id_user" => $user['id'],
        ];

        $validator2 = Validator::make($reqs, [
            'id_user'       => 'required',
            'kode_instansi' => 'required',
            'nama_lengkap'  => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat_lengkap' => 'required',
            'agama' => 'required',
            'no_telepon' => 'required',
        ]);



        if ($validator2->fails()) {
            return response()->json($validator2->errors(), 422);
            // return response()->json([
            //     'message' => 'data tidak valid',
            //     'status' => false,
            //     'response' => [],
            // ], 401);
        }

        $orangtua = OrangTua::create(array_merge($validator2->validated(), ["siswa" => $request->siswa]));

        return response()->json([
            'message'    => 'create successfully',
            'response'   => Package::getUserJoin($user['id']),
            "status"     => true
        ], 200);
    }
    public function Updated(Request $request)
    {
        $reqs = $request->all();
        if (empty($reqs['id_user'])) {
            return response()->json(['error' => 'id user not null'], 401);
        }
        $getUs = Package::getUserJoin($reqs['id_user']);
        if (auth()->user()->role != 'INSTANSI') {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        $reqs += [
            "kode_instansi" => auth()->user()->kode_instansi
        ];
        // username is null
        $username = $reqs["username"];

        // upload image ======
        $uploads = Helper::Upgambar($request, 'foto', '/Assets/img/user/');
        if ($uploads['status'] == false) {
            $uploads = 'default.jpg';
        }
        $data = [
            'kode_instansi' => auth()->user()->kode_instansi,
            'username' => $username,
            'email'    => !empty($reqs['email']) ? $reqs['email'] : null,
            "pin" => !empty($reqs['pin']) ? $reqs['pin'] : '1234',
            "saldo" => !empty($request->saldo) ? $request->saldo : 0,
            'foto' => $uploads
        ];

        if ($getUs->username != $reqs['username']) {
            $validator = Validator::make($data, [
                'username' => 'required|string|max:100|unique:users',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
        }

        if (!empty($reqs['password'])) {
            $data += ["password" => bcrypt($reqs['password'])];
        }

        User::where('id', $reqs['id_user'])->update($data);
        $reqs += [
            "kode_instansi" => auth()->user()->kode_instansi,
            "id_user" => $reqs['id_user'],
        ];

        $validator2 = Validator::make($reqs, [
            'id_user'       => 'required',
            'kode_instansi' => 'required',
            'nama_lengkap'  => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat_lengkap' => 'required',
            'agama' => 'required',
            'no_telepon' => 'required',
        ]);

        if ($validator2->fails()) {
            return response()->json([
                'message' => 'data tidak valid',
                'status' => false,
                'response' => [],
            ], 401);
        }

        OrangTua::where('id_user', $reqs['id_user'])->update(array_merge($validator2->validated(), ["siswa" => json_encode($request->siswa)]));

        return response()->json([
            'message'    => 'update success',
            'response'   => Package::getUserJoin($reqs['id_user']),
            "status"     => true
        ], 200);
    }
    public function Deleted($slug)
    {
        User::where('id', $slug)->delete();
        OrangTua::where('id_user', $slug)->delete();
        return response()->json([
            'message'    => 'delete staf successfully',
            'response'   => [],
            "status"     => true
        ], 200);
    }
    public function getByTable()
    {
        // try {
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        $get = DB::table('users');
        // $get->select(DB::raw('staff.nip, staff.nama_lengkap,jabatan.nama_jabatan,staff.status_pns,staff.status_guru,users.id as id_user'));
        $get->join('orang_tua', function ($join) {
            $join->on('orang_tua.id_user', '=', 'users.id');
        });
        $get->orderBy('users.created_at', 'DESC');
        $get->where('users.kode_instansi', auth()->user()->kode_instansi);
        $result = $get->get();
        $__ = [];
        $no = 1;
        foreach ($result as $value) {
            $ht = '';
            foreach (json_decode($value->siswa) as $values) {
                $siswa = Siswa::where('id_user', $values->id_siswa)->first();
                $ht .= '<a href="#" class="itSiswa" onclick="detailSiswa(' . $values->id_siswa . ')" data-id="' . $values->id_siswa . '">' . $siswa->nama_siswa . '</a><br/>';
            }
            $data___ = [
                $no++,
                '<a href="#" onClick="showProfile(' . $value->id_user . ')">' . $value->nama_lengkap . '</a>',
                $value->alamat_lengkap,
                $value->no_telepon,
                '<div class="conSiswa">' . $ht . '</div>',
                '<div style="display: flex ; justify-content: space-between; align-items: center"> 
                    <button class="btn btn-primary btn-sm" onClick="updateOrangTua(' . $value->id_user . ')"><i class="fa fa-edit"></i></button> 
                    <button class="btn btn-danger btn-sm ml-2" onClick="deleteJabatan(' . $value->id_user . ')"><i class="fa fa-trash"></i></button>
                    
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
        // } catch (\Throwable $th) {
        //     return response()->json(["response" => "error", "msg" => "server error"], 500);
        // }
    }
    public function get()
    {
        $or = OrangTua::orderBy('created_at', 'DESC')->get();
        $result = [];
        foreach ($or as $value) {
            array_push($result, Package::getUserJoin($value->id_user));
        }
        return response()->json($result);
    }
    public function getById($id)
    {
        $or = OrangTua::where('id_user', $id)->orderBy('created_at', 'DESC')->get();
        $result = [];
        foreach ($or as $value) {
            array_push($result, Package::getUserJoin($value->id_user));
        }
        return response()->json($result[0]);
    }
}
