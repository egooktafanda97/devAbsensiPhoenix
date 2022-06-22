<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatSaldo extends Model
{
    use HasFactory;
    protected $table = "riwayat_saldo";
    protected $fillable = [
        "id_user",
        "kode_instansi",
        "tanggal",
        "times",
        "aksi",
        "pesan",
        "oleh",
        "saldo_awal",
        "saldo",
        "jumlah_aksi",
        "jenis_saldo",
        "bukti",
        "id_payment",
        "kode_faktur",
        "kode_request",
        "catatan",
        "status"
    ];
}
