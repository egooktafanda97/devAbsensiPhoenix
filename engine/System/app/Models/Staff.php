<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = "staff";
    protected $fillable = [
        'id_user',
        'nik',
        'kode_instansi',
        'nama_lengkap',
        'nip',
        'tmp_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'agama',
        'alamat_rumah',
        'telepon',
        'id_jabatan',
        'tgl_masuk',
        'unit_konsentrasi',
        'status_guru',
        'status_mengajar',
        'status_pns',
        'status_staff',
        "table_relation",
        "id_relation"
    ];
}
