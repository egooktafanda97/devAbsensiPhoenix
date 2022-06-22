<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;

    protected $table = 'instansis';
    protected $fillable = [
        'kode_instansi',
        'user_id',
        'user_pimpinan',
        'nama_instansi',
        'email_instansi',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'about',
        'visi',
        'misi',
        'frame_koordinat',
        'image',
        'video',
        'galery',
        'package_module',
        'saldo_tunai',
        'saldo_bank',
        'saldo_payment',
        'kas_sekolah'
    ];
}
