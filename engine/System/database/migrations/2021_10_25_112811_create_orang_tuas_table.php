<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangTuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orang_tuas', function (Blueprint $table) {
            $table->bigIncrements('id_orang_tua');
            $table->bigInteger('id_user');
            $table->string('kode_instansi', 30);
            $table->string('nama_lengkap', 30);
            $table->string('jenis_kelamin');
            $table->text('alamat_lengkap');
            $table->longText('siswa', 30);
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
        Schema::dropIfExists('orang_tuas');
    }
}
