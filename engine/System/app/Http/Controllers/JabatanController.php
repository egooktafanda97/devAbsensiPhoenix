<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\jabatan;
use Validator;

class JabatanController extends Controller
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

        $validator = Validator::make($reqs, [
            "kode_instansi"     => 'required',
            "nama_jabatan" => 'required',
            "tugas" => 'required',
            "deskripsi_tugas" => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'data tidak valid',
                'status' => false,
                'response' => [],
            ], 401);
        }
        $jabatan = jabatan::create($validator->validated());
        return response()->json([
            'message'    => 'jabatan successfully',
            'response'   => $jabatan,
            "status"     => true
        ], 200);
    }
    public function Updated(Request $request)
    {
        $reqs = $request->all();
        if (auth()->user()->role != 'INSTANSI') {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $reqs += [
            "kode_instansi" => auth()->user()->kode_instansi
        ];

        $validator = Validator::make($reqs, [
            "kode_instansi"     => 'required',
            "nama_jabatan" => 'required',
            "tugas" => 'required',
            "deskripsi_tugas" => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'data tidak valid',
                'status' => false,
                'response' => [],
            ], 401);
        }
        $jabatan = jabatan::where('id_jabatan', $request->id_jabatan)->update($validator->validated());
        return response()->json([
            'message'    => 'update jabatan successfully',
            'response'   => $validator->validated(),
            "status"     => $jabatan
        ], 200);
    }
    public function Deleted($slug)
    {
        if (auth()->user()->role != 'INSTANSI') {
            return response()->json(['error' => 'You don\'t have access'], 401);
        }
        $jab = jabatan::where('id_jabatan', $slug)->delete();
        return response()->json([
            'message'    => 'delete jabatan successfully',
            'response'   => [],
            "status"     => $jab
        ], 200);
    }
    public function getAll()
    {
        $search = null;
        if (!empty($_GET['search'])) {
            $search = $_GET['search'];
        }
        $gets = jabatan::where("kode_instansi", auth()->user()->kode_instansi)->where('nama_jabatan', 'like', '%' . $search . '%')->get();
        return response()->json($gets);
    }
    public function getById($slug)
    {
        $gets = jabatan::where(["kode_instansi" => auth()->user()->kode_instansi, 'id_jabatan' => $slug])->first();
        return response()->json($gets);
    }
    public function getJabatanTable($nis = null)
    {
        try {
            if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN") {
                return response()->json(['error' => 'You don\'t have access'], 401);
            }
            $get = DB::table('jabatan');
            $get->select(DB::raw('id_jabatan,nama_jabatan,tugas,deskripsi_tugas,created_at'));

            if (!empty($_GET['id-jabatan'])) {
                $get->where('jabatan.id_jabatan', 'like', '' . $_GET['id-jabatan'] . '');
            }
            if (!empty($_GET['nama-jabatan'])) {
                $get->where('jabatan.nama_jabatan', 'like', '%' . $_GET['nama-jabatan'] . '%');
            }

            $get->where('kode_instansi', auth()->user()->kode_instansi);
            $result = $get->get();

            $__ = [];
            $no = 1;
            foreach ($result as $value) {
                $data___ = [
                    $no++,
                    $value->nama_jabatan,
                    $value->tugas,
                    $value->deskripsi_tugas,
                    '<div style="display: flex ; justify-content: space-between; align-items: center">
                    <div><button class="btn btn-primary btn-sm" onClick="updateJabatan(' . $value->id_jabatan . ')"><i class="fa fa-edit"></i></button> 
                    <button class="btn btn-danger btn-sm ml-2" onClick="deleteJabatan(' . $value->id_jabatan . ')"><i class="fa fa-trash"></i></button>
                    </div>
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
}
