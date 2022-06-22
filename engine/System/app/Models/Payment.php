<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payment";
    protected $fillable = [
        'id_user',
        'kode_instansi',
        'id_user_tujuan',
        'response',
        "kode_reference",
        "reference_id",
        "status",
        "pesan",
        "total",
        "biaya_payment",
        "sum_total"
    ];
}
