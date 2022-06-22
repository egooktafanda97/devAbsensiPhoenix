<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulkDataUser extends Model
{
    use HasFactory;
    protected $table = "bulk_data_user";
    public $timestamps = false;
    protected $fillable = [
        "nama",
        "nis",
        "qrcode",
        "foto",
        "dateCreated",
    ];
}
