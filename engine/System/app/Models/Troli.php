<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Troli extends Model
{
    use HasFactory;
    protected $table = "troli";
    protected $fillable = [
        "id_instansi",
        "id_kantin",
        "id_user",
        "id_product",
        "no_faktur",
        "jumlah_product",
        "status"
    ];
}
