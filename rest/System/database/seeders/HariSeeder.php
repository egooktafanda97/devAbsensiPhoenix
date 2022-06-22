<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hari')->insert([
            'nama' => 'Senin'
        ]);

        DB::table('hari')->insert([
            'nama' => 'Selasa'
        ]);

        DB::table('hari')->insert([
            'nama' => 'Rabu'
        ]);

        DB::table('hari')->insert([
            'nama' => 'Kamis'
        ]);

        DB::table('hari')->insert([
            'nama' => 'Jumat'
        ]);

        DB::table('hari')->insert([
            'nama' => 'Sabtu'
        ]);

        DB::table('hari')->insert([
            'nama' => 'Minggu'
        ]);
    }
}
