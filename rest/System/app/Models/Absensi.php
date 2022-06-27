<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PengaturanInstansi;
use App\Models\User;
use App\Models\Siswa;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $fillable = [
        'user_id',
        'session_id',
        'kode_instansi',
        'pengaturan_instansi_id',
        'waktu',
        'keterangan',
        'tanggal',
        'sync'
    ];

    protected $attributes = [
        'sync' => false,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'user_id', 'id_user');
    }
    public function pengaturanInstansi()
    {
        return $this->belongsTo(PengaturanInstansi::class, 'pengaturan_instansi_id', 'id');
    }
}
