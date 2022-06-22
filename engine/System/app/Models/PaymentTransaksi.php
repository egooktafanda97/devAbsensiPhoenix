<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentTransaksi extends Model
{
    use HasFactory;

    protected $table = "payment_transaksi";
    protected $fillable = [
        "key_reference",
        "kode_instansi",
        "id_user",
        "id_tujuan",
        "jumlah",
        "sub_jumlah",
        "biaya_transaksi",
        "method",
        "provider",
        "va",
        "reference_id",
        "display_name",
        "expired_time",
        "expired_at",
        "status",
        "request",
        "response",
        "it_get",
        "status_transaksi",
    ];
}
