<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'kode_instansi' => '11.11.11.11',
            'email' => 'ahmadDahlan@gmail.com',
            'username' => 'ahmadDahlan',
            'pin' => '2805',
            'qr_code' => null,
            'email_verified_at' => null,
            'password' => Hash::make('password'),
            'role' => 'INSTANSI',
            'remember_token' => 'd4PDu3P9e2WTAecDgtVsIR7PNdPmy8U4GdC8ZmKd',
            'status_user' => 'isActive',
            'user_join' => '1',
            'name_table_join' => null,
            'saldo' => 0,
            'foto' => ''
        ]);
    }
}
