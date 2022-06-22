<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairBug  extends Model
{
    use HasFactory;
    protected $table = "repair_bugs";
    protected $fillable = [
        'id_user',
        "id_kantin",
        "error",
        "history_transaksi_siswa",
        "group_error_siswa",
        "group_error_kantin",
        "saldo_siswa",
        "perubahan_saldo_siswa",
        "saldo_kantin",
        "perubahan_saldo_kantin",
        "pesan",
        "tanggal",
        "status"
    ];
}
