<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanInstansi extends Model
{
    use HasFactory;
    protected $table = 'pengaturan_instansis';
    protected $fillable = [
        'kode_instansi',
        'jam_masuk',
        'batas_masuk',
        'jam_pulang',
        'batas_pulang'
    ];
}
