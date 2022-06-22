<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kantin;

use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable = [
        "user_id",
        "id_kantin",
        "kode_instansi",
        "nama_produk",
        "jenis_produk",
        "kategori_produk",
        "harga_produk",
        "satuan_produk",
        "deskripsi",
        "gambar",
        "stok",
        "status"
    ];

    public static function kantin()
    {
        $kantin = DB::table('users')
            ->where('users.id', auth()->user()->id)
            ->join('kantin', function ($join) {
                $join->on('kantin.user_id', '=', 'users.id');
            })
            ->first();
        return  $kantin;
    }
    public static function getAll($search = null)
    {
        $product = DB::table('product')
            ->join('kantin', function ($join) {
                $join->on('kantin.user_id', '=', 'product.user_id');
            })
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'product.user_id');
            })
            ->where('product.user_id', auth()->user()->id)
            ->get();
        return  $product;
    }
}
