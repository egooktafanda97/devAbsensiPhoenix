<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'tbl_siswa';
    protected $fillable = [
        'nis',
        'kode_instansi',
        'id_user',
        'nama_siswa',
        'jk',
        'tgl_lahir',
        'alamat',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'agama',
        'tahun_masuk',
        'kelas'
    ];

    protected $primaryKey = 'nis';
    public $incrementing = false;
    
    public function absensi()
    {
        return $this->setConnection('mysql')->hasMany(Absensi::class, 'user_id', 'id_user');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
