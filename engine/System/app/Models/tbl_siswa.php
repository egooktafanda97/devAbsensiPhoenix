<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_siswa extends Model
{
    use HasFactory;
    protected $table = "tbl_siswa";
    protected $fillable = [
        "nis",
        "kode_instansi",
        "id_user",
        "nama_siswa",
        "jk",
        "tgl_lahir",
        "alamat",
        "provinsi",
        "kabupaten",
        "kecamatan",
        "agama",
        "tahun_masuk",
        "kelas"
    ];
}
