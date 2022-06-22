<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->bigInteger('id_guru')->increments();
            $table->string('kode_instansi', 100);
            $table->integer('id_user');
            $table->string('password');
            $table->string('nama');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('telepon');
            $table->date('tanggal_lahir');
            $table->string('email');
            $table->string('tahun_masuk');
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
        Schema::dropIfExists('guru');
    }
}
