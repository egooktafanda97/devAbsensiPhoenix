<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi_kantin";
    protected $fillable = [
        "id_instansi",
        "user_kantin",
        "id_user",
        "kode_faktur",
        "total_bayar",
        "catatan_transaksi",
        "kode_request",
        "tanggal",
        "waktu",
        "status"
    ];
}
