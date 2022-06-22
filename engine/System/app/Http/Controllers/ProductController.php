<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Validator;
use App\Helper\Helpers;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }
    public function Created(Request $request)
    {
        try {
            $data = $request->all();
            if (auth()->user()->role != 'KANTIN') {
                return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
            }
            if (auth()->user()->role == 'KANTIN') {
                if (!empty($data['user_id'])) {
                    unset($data['user_id']);
                }
                if (!empty($data['kode_instansi'])) {
                    unset($data['kode_instansi']);
                }
                if (!empty($data['id_kantin'])) {
                    unset($data['id_kantin']);
                }
                $data += ["user_id" => auth()->user()->id, "kode_instansi" => auth()->user()->kode_instansi, "id_kantin" => Product::kantin()->id_kantin];
            }
            $img = Helpers::Upgambar($request, 'gambar', 'Assets/product');
            if ($img['status'] == true) {
                $img =  $img['fileName'];
            } else {
                $img = 'default.jpg';
            }
            $data += ["gambar" => $img];

            $validator = Validator::make($data, [
                "kode_instansi"     => 'required',
                "user_id"           => 'required|between:1,100',
                "id_kantin"         => 'required',
                "nama_produk"       => 'required',
                "jenis_produk"      => 'required',
                "kategori_produk"   => 'required',
                "harga_produk"      => 'required',
                "satuan_produk"     => 'required',
                "deskripsi"         => 'required',
                "gambar"            => 'required',
                "stok"              => 'required',
                "status"            => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
            $valid = $validator->validated();
            $instansi = Product::create($valid);
            return response()->json([
                'message' => 'User successfully',
                'status'  => true,
                'response' => $instansi
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(["response" => "error", "msg" => "server error", 'status' => false], 500);
        }
    }


    public function Updates(Request $request)
    {
        try {
            $data = $request->all();
            if (auth()->user()->role != 'KANTIN') {
                return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
            }
            if (auth()->user()->role == 'KANTIN') {
                if (!empty($data['user_id'])) {
                    unset($data['user_id']);
                }
                if (!empty($data['kode_instansi'])) {
                    unset($data['kode_instansi']);
                }
                if (!empty($data['id_kantin'])) {
                    unset($data['id_kantin']);
                }
                $data += ["user_id" => auth()->user()->id, "kode_instansi" => auth()->user()->kode_instansi, "id_kantin" => Product::kantin()->id_kantin];
            }
            $img = Helpers::Upgambar($request, 'gambar', 'Assets/product');
            if ($img['status'] == true) {
                $img =  $img['fileName'];
            } else {
                $img = 'default.jpg';
            }
            $data += ["gambar" => $img];

            $validator = Validator::make($data, [
                "kode_instansi"     => 'required',
                "user_id"           => 'required|between:1,100',
                "id_kantin"         => 'required',
                "nama_produk"       => 'required',
                "jenis_produk"      => 'required',
                // "kategori_produk"   => 'required',
                "harga_produk"      => 'required',
                "satuan_produk"     => 'required',
                "deskripsi"         => 'required',
                "gambar"            => 'required',
                "stok"              => 'required',
                "status"            => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors()->toJson(), 400);
            }
            $valid = $validator->validated();
            $produk = Product::where('id_product', $request->id_product)->update($valid);
            return response()->json([
                'message' => 'Update successfully',
                'status'  => true,
                'response' => $produk
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(["response" => "error", "msg" => "server error", 'status' => false], 500);
        }
    }

    public function Deletes($slug)
    {
        $del = Product::where('product.id_product', $slug)->delete();
        return response()->json([
            'message' => 'delete successfully',
            'status'  => true,
            'response' => $del
        ], 200);
    }

    public function get($slug = null)
    {
        if (auth()->user()->role != 'KANTIN') {
            return response()->json(['error' => 'You don\'t have access', 'status' => false], 401);
        }
        $get = DB::table('product');
        $get->join('kantin', function ($join) {
            $join->on('kantin.id_kantin', '=', 'product.id_kantin');
        });
        $get->join('kategori', function ($join) {
            $join->on('kategori.id_kategori', '=', 'product.kategori_produk');
        });
        $get->orderBy('product.created_at');
        $get->where('kantin.id_kantin', Product::kantin()->id_kantin);
        if (!empty($_GET['kategori_produk'])) {
            $get->where('product.kategori_produk', $_GET['kategori_produk']);
        }
        if (!empty($slug)) {
            $get->where('product.id_product', $slug);
            $result = $get->first();
        } else {
            $result = $get->get();
        }

        return response()->json($result, 200);
    }
}
