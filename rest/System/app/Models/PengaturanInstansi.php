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
        'session_id',
        'id_hari',
        'keterangan',
        'time_start',
        'time_end',
        'tanggal',
        'sync',
        'role'
    ];

    protected $attributes = [
        'sync' => false,
    ];

    public function absensi()
    {
        return $this->belongsTo(Absensi::class, 'pengaturan_instansi_id', 'id');
    }
}
