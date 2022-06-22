<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_siswa', function (Blueprint $table) {
            $table->bigInteger('nis')->primary();
            $table->integer('id_user')->references('id_user')->on('user');
            $table->string('nama_siswa', 100);
            $table->string('jk', 10);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('agama', 10);
            $table->date('tahun_masuk');
            $table->string('pin', 6)->nullable();
            $table->string('username', 100)->nullable();
            $table->text('qr_code');
            $table->string('password', 100);
            $table->string('password_default', 100)->nullable();
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
        Schema::dropIfExists('tbl_siswa');
    }
}
