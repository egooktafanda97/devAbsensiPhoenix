<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturanInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturan_instansis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kode_instansi');
            $table->time('jam_masuk');
            $table->time('batas_masuk');
            $table->time('jam_pulang');
            $table->time('batas_pulang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaturan_instansis');
    }
}
