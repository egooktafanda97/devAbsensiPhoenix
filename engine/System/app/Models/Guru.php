<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "guru";
    protected $fillable = [
        "kode_instansi",
        "id_user",
        "id_staf",
        "Nama_Lengkap",
        "NIK",
        "No_Passport",
        "LP",
        "Tempat_Lahir",
        "Tanggal_Lahir",
        "Nama_Ayah_Kandung",
        "Nama_Ibu_Kandung",
        "Alamat",
        "Pendidikan_Terakhir",
        "Nama_SekolahPerguruan_Tinggi",
        "Tahun_Lulus",
        "Program_Studi",
        "Pernah_PesantrenTidak",
        "Nama_Pesantren_Jika_pernah",
        "Tugas_Utama",
        "Jabatan",
        "Bidang_Studi_yang_Diajarkan",
        "Status_Kepegawaian",
        "NIP",
        "PangkatGolongan",
        "Mulai_Bertugas_",
        "Status_Penugasan",
        "NUPTK",
        "NPK",
        "PegId",
        "No_KK",
        "Status_Perkawinan",
        "Nama_SuamiIstri",
        "NIK_SuamiIstri",
        "Pendidikan_Terakhir_SuamiIstri",
        "Pekerjaan_SuamiIstri",
        "Jumlah_Anak",
    ];
}
