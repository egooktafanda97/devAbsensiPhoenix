<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanInstansi extends Model
{
    use HasFactory;

    protected $table = 'pengaturan_instansi';
    protected $fillable = [
        'kode_instansi',
        'id_hari',
        'keterangan',
        'time_start',
        'time_end'
    ];
}
