<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';
    protected $fillable = [
        'user_id',
        'kode_instansi',
        'pengaturan_instansi_id',
        'waktu',
        'keterangan',
        'sync'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'user_id', 'id_user');
    }
}
