<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Tymon\JWTAuth\Contracts\JWTSubject;
// call the class relation
use App\Models\Absensi;
use App\Models\Instansi;
use App\Models\Siswa;
use App\Models\Staff;


class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // primary
    protected $table = 'users';
    protected $fillable = [
        "id",
        'kode_instansi',
        'email',
        'username',
        'pin',
        'qr_code',
        'password',
        'role',
        'route',
        'remember_token',
        'status_user',
        'user_join',
        "name_table_join",
        "saldo",
        'foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function absensi()
    {
        return $this->hasOne(Absensi::class);
    }

    // join staff
    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'id_user');
    }

    public function instansi()
    {
        return $this->hasOne(Instansi::class);
    }
}
