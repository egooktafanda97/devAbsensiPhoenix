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
        Schema::create('pengaturan_instansi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_instansi');
            $table->foreignId('id_hari');
            $table->string('keterangan');
            $table->time('time_start');
            $table->time('time_end');
            $table->date('tanggal');
            $table->boolean('sync');
            $table->string('role');
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
        Schema::dropIfExists('pengaturan_instansi');
    }
}
