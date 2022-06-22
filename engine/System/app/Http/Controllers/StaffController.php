<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\jabatan;
use App\Models\Guru;

use App\Helper\Helpers as Helper;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }
    public function Created(Request $request)
    {
        $reqs = $request->all();
        if (auth()->user()->role != 'INSTANSI') {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $reqs += [
            "kode_instansi" => auth()->user()->kode_instansi
        ];
        // username is null
        $username = $reqs["username"];

        // upload image ======
        $uploads = $this->Upgambar($request, 'foto', '/Assets/img/user/');
        if ($uploads['status'] == false) {
            $upl = 'default.jpg';
        } else {
            $upl = $uploads['fileName'];
        }

        // remember token 
        $random = Str::random(40);

        $data = [
            'kode_instansi' => auth()->user()->kode_instansi,
            'username' => $username,
            'role' => "STAFF",
            'password' => bcrypt($reqs['password']),
            "pin" => "1234",
            "remember_token" => $random,
            "status_user" => "isActive",
            "user_join" => 1,
            "name_table_join" => 'staff',
            "saldo" => 0,
            'foto' => $upl
        ];

        $validator = Validator::make($data, [
            'username' => 'required|string|max:100|unique:users',
            'password' => 'required|string|min:6',
            'role'     => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create($data);

        $reqs += ["id_user" => $user['id']];

        $validator2 = Validator::make($reqs, [
            'id_user'       => 'required',
            'nik'           => 'required',
            'kode_instansi' => 'required',
            'nama_lengkap'  => 'required',
            'tmp_lahir'     => 'required',
            'tgl_lahir'     => 'required',
            'jenis_kelamin' => 'required',
            'agama'         => 'required',
            'alamat_rumah'  => 'required',
            'telepon'       => 'required',
            'id_jabatan'    => 'required',
        ]);
        $req = array_merge($validator2->validated(), [
            'nip'   => $request->nip,
            'tgl_masuk' => $request->tgl_masuk,
            'unit_konsentrasi' => $request->unit_konsentrasi,
            'status_guru' => $request->status_guru,
            'status_mengajar' => $request->status_mengajar,
            'status_pns' => $request->status_pns,
            'status_staff' => 'active',
        ]);

        if ($validator2->fails()) {
            return response()->json([
                'message' => 'data tidak valid',
                'status' => false,
                'response' => [],
            ], 401);
        }

        $staf = Staff::create($req);
        return response()->json([
            'message'    => 'create successfully',
            'response'   => $staf,
            "status"     => true
        ], 200);
    }

    public function Updated(Request $request)
    {
        $reqs = $request->all();
        $code_generate = !empty($reqs['code_generate']) ? $reqs['code_generate'] : Str::random(40);
        if (auth()->user()->role != 'INSTANSI') {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $reqs += [
            "kode_instansi" => auth()->user()->kode_instansi
        ];
        // username is null
        $username = $reqs["username"];



        // remember token 
        $random = Str::random(40);

        $data = [
            'username' => $username,
            "saldo" => !empty($reqs['saldo']) ? $reqs['saldo'] : 0,
        ];
        // upload image ======
        $uploads = $this->Upgambar($request, 'foto', '/Assets/img/user/');
        if ($uploads['status'] != false) {
            $data += ['foto' => $uploads['fileName']];
        }
        if (User::where('id', $reqs['id_user'])->first()['username'] != $username) {
            $validator = Validator::make($data, [
                'username' => 'required|string|max:100|unique:users',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
        }

        if (!empty($reqs['password'])) {
            $data += ['password' => bcrypt($reqs['password'])];
        }


        $user = User::where('id', $reqs['id_user'])->update($data);

        $validator2 = Validator::make($reqs, [
            'id_user'       => 'required',
            'kode_instansi' => 'required',
            'nama_lengkap'  => 'required',
            'tmp_lahir'     => 'required',
            'tgl_lahir'     => 'required',
            'jenis_kelamin' => 'required',
            'agama'         => 'required',
            'alamat_rumah'  => 'required',
            'telepon'       => 'required',
            'id_jabatan'    => 'required',
        ]);
        $req = array_merge($validator2->validated(), [
            'nip'   => $request->nip,
            'tgl_masuk' => $request->tgl_masuk,
            'unit_konsentrasi' => $request->unit_konsentrasi,
            'status_guru' => $request->status_guru,
            'status_mengajar' => $request->status_mengajar,
            'status_pns' => $request->status_pns,
        ]);

        if ($validator2->fails()) {
            return response()->json([
                'message' => 'data tidak valid',
                'status' => false,
                'response' => [],
            ], 401);
        }

        $staf = Staff::where('id_user', $reqs['id_user'])->update($req);

        return response()->json([
            'message'    => 'update staf successfully',
            'response'   => array_merge(
                $data,
                $req
            ),
            "status"     => true
        ], 200);
    }

    public function Deleted($slug)
    {
        User::where('id', $slug)->delete();
        Staff::where('id_user', $slug)->delete();
        return response()->json([
            'message'    => 'delete staf successfully',
            'response'   => [],
            "status"     => true
        ], 200);
    }

    public function Upgambar($request, $nameFile, $path)
    {
        if ($request->hasFile($nameFile)) {
            $validator = Validator::make($request->all(), [
                $nameFile         => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            if ($validator->fails()) {
                return ["status" => false, "msg" => "tidak valid"];
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
    public function get()
    {
        $data = Staff::all();
        return response()->json($data);
    }
    public function getAll()
    {
        $get = DB::table('users')
            ->join('staff', function ($join) {
                $join->on('staff.id_user', '=', 'users.id');
            })
            // ->join('jabatan', function ($join) {
            //     $join->on('jabatan.id_jabatan', '=', 'staff.id_jabatan');
            // })
            ->get();
        return response()->json($get);
    }
    public function getByUser($slug)
    {
        $get = DB::table('users')
            ->join('staff', function ($join) {
                $join->on('staff.id_user', '=', 'users.id');
            })
            // ->join('jabatan', function ($join) {
            //     $join->on('jabatan.id_jabatan', '=', 'staff.id_jabatan');
            // })
            ->where('id_user', $slug)
            ->first();
        return response()->json($get);
    }
    public function getByTable($slug = null)
    {
        // try {
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        $get = DB::table('users');
        // $get->select(DB::raw('staff.nip, staff.nama_lengkap,jabatan.nama_jabatan,staff.status_pns,staff.status_guru,users.id as id_user'));
        $get->join('staff', function ($join) {
            $join->on('staff.id_user', '=', 'users.id');
        });
        if ($slug != null && $slug == 'guru') {
            $get->join('guru', function ($join) {
                $join->on('guru.id_staff', '=', 'staff.id_staf');
            });
        }

        $get->orderBy('users.created_at', 'DESC');
        $get->where('users.kode_instansi', auth()->user()->kode_instansi);
        $result = $get->get();
        $__ = [];
        $no = 1;
        foreach ($result as $value) {

            $btnPass = '';
            $btnAddSaldo = '';
            $namaSiswaSet = '';
            if (!empty($value->qr_code)) {
                $namaSiswaSet = $value->nama_lengkap . '<div class="badge badge-success" style="font-size:.6em; float:right;">Connected</div>';
                $btnPass = '<button class="btn btn-outline-primary btn-sm" onClick="updatePass(' . $value->id_user . ')"><i class="fa fa-key"></i></button> ';
            } else {
                $namaSiswaSet = $value->nama_lengkap . '<div class="badge badge-dark" style="font-size:.6em;float:right;">Not Connected</div>';
                $btnPass = '<button class="btn btn-dark btn-disable btn-sm""><i class="fa fa-key"></i></button> ';
            }

            $data___ = [
                $no++,
                '<a href="#" onClick="showProfile(' . $value->id_user . ')">' . $value->nip . '</a>',
                $namaSiswaSet,
                $value->id_jabatan,
                // !empty($value->id_jabatan) ? jabatan::where('id_jabatan', $value->id_jabatan)->first()->nama_jabatan : '-',
                $value->status_pns,
                $value->status_guru,
                '<div style="display: flex ; justify-content: space-between; align-items: center">    
                    ' . $btnPass . '
                    <button class="btn btn-primary btn-sm" onClick="updateJabatan(' . $value->id_user . ')"><i class="fa fa-edit"></i></button> 
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
    public function getByTableConneted($slug = null)
    {
        // try {
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }

        $get = DB::table('users');
        // $get->select(DB::raw('staff.nip, staff.nama_lengkap,jabatan.nama_jabatan,staff.status_pns,staff.status_guru,users.id as id_user'));
        $get->join('staff', function ($join) {
            $join->on('staff.id_user', '=', 'users.id');
        });
        if ($slug != null && $slug == 'guru') {
            $get->join('guru', function ($join) {
                $join->on('guru.id_staff', '=', 'staff.id_staf');
            });
        }

        $get->orderBy('users.created_at', 'DESC');
        $get->where('users.kode_instansi', auth()->user()->kode_instansi);
        $result = $get->get();
        $__ = [];
        $no = 1;
        foreach ($result as $value) {
            $data___ = [
                $no++,
                '<a href="#" onClick="showProfile(' . $value->id_user . ')">' . $value->nama_lengkap . " " . $value->nip . '</a>',
                $value->id_jabatan,
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
        // } catch (\Throwable $th) {
        //     return response()->json(["response" => "error", "msg" => "server error"], 500);
        // }
    }
    public function getStaffTester()
    {

        // return  response()->json(count($staff));
    }
    public function konesi_kartu(Request $request)
    {
        $staff = Staff::where('id_staf', $request->id_staf)->first();
        if (empty($staff)) {
            return response()->json(['response' => 'error', 'msg' => 'data not found'], 404);
        }
        if (!empty($staff->id_user)) {
            if (!empty($request->qrCode) && $request->qrCode != null && $request->qrCode != '') {
                User::where('id', $staff->id_user)->update([
                    'qr_code' => $request->qrCode,
                ]);
                return response()->json([
                    "response" => $staff,
                    "status" => true
                ]);
            } else {
                return response()->json([
                    "response" => "error",
                    "status" => false,
                    "request" => $request->all()
                ]);
            }
        } else {
            if (!empty($request->qrCode) && $request->qrCode != null && $request->qrCode != '') {
                $random = Str::random(40);
                $data = [
                    'username' => !empty($staff->nik) ? $staff->nik : $random,
                    'kode_instansi' => auth()->user()->kode_instansi,
                    'role' => 'STAFF',
                    'password' => bcrypt(!empty($staff->nik) ? $staff->nik : "ahmaddahlan"),
                    "pin" => "1234",
                    "qr_code" => $request->qrCode,
                    "remember_token" => $random,
                    "status_user" => "isActive",
                    "user_join" => 1,
                    'foto' => 'default.jpg',
                    'saldo' => 0,
                    'name_table_join' => 'staff'
                ];

                $id_user = User::create($data);

                Staff::where('id_staf', $request->id_staf)->update([
                    'id_user' => $id_user->id
                ]);

                return response()->json([
                    "response" => $staff,
                    "status" => true
                ]);
            } else {
                return response()->json([
                    "response" => "error",
                    "status" => false,
                    "request" => $request->all()
                ]);
            }
        }
    }
}
