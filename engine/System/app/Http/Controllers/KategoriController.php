<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use \Illuminate\Support\Str;

use App\Models\Kategori;
use App\Models\Kantin;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }

    public function Created(Request $request)
    {
        $reqs = $request->all();
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != 'KANTIN') {
            return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
        }
        $reqs += [
            "kode_instansi" => auth()->user()->kode_instansi,
            "id_kantin" => Kantin::where('user_id', auth()->user()->id)->first()->id_kantin
        ];


        $validator = Validator::make($reqs, [
            "kode_instansi" => 'required',
            "id_kantin" => 'required',
            "kategori" => 'required',
            "icon" => 'required',
            "color" => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $kat = Kategori::create($validator->validated());


        return response()->json([
            'message' => 'User successfully',
            'status'  => true,
            'response' => $kat
        ], 200);
    }
    public function Updates(Request $request)
    {
        $reqs = $request->all();
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != 'KANTIN') {
            return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
        }
        $reqs += [
            "kode_instansi" => auth()->user()->kode_instansi,
            "id_kantin" => Kantin::where('user_id', auth()->user()->id)->first()->id_kantin
        ];

        $validator = Validator::make($reqs, [
            "kode_instansi" => 'required',
            "id_kantin" => 'required',
            "kategori" => 'required|unique:kategori',
            "icon" => 'required',
            "color" => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $kat = Kategori::where('id_kategori', $reqs['id_kategori'])->update($validator->validated());


        return response()->json([
            'message' => 'User successfully',
            'status'  => true,
            'response' => $kat
        ], 200);
    }
    public function Deletes($slug)
    {
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != 'KANTIN') {
            return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
        }
        $kat =  Kategori::where('id_kategori', $slug)->delete();
        return response()->json([
            'message' => 'User successfully',
            'status'  => true,
            'response' => $kat
        ], 200);
    }
    public function get($slug = null)
    {
        if (auth()->user()->role != 'INSTANSI' &&  auth()->user()->role != "SUPER_ADMIN" && auth()->user()->role != 'KANTIN') {
            return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
        }
        $get = DB::table('kategori');
        $get->join('kantin', function ($join) {
            $join->on('kantin.id_kantin', '=', 'kategori.id_kantin');
        });
        $get->orderBy('kategori.created_at');
        $get->where('kantin.user_id', auth()->user()->id);
        if (!empty($slug)) {
            $get->where('kategori.id_kategori', $slug);
            $result = $get->first();
        } else {
            $result = $get->get();
        }

        return response()->json($result, 200);
    }
}
