<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansis', function (Blueprint $table) {
            $table->string('kode_instansi')->unique();
            $table->foreignId('user_id');
            $table->foreignId('user_pimpinan')->nullable();
            $table->string('nama_instansi');
            $table->string('email_instansi');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('about');
            $table->string('visi');
            $table->string('misi');
            $table->string('frame_koordinat')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('galery')->nullable();
            $table->string('package_module');
            $table->string('saldo_tunai');
            $table->string('saldo_bank');
            $table->string('saldo_payment');
            $table->string('kas_sekolah');
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
        Schema::dropIfExists('instansis');
    }
}
