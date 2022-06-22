<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantin extends Model
{
    use HasFactory;
    protected $table = "kantin";
    protected $fillable = [
        "kode_instansi",
        "user_id",
        "nama_kantin",
        "nama_pemilik",
        "no_telp",
        "alamat_pemilik",
        "deskripsi_kantin",
        "gambar_kantin"

    ];
}
