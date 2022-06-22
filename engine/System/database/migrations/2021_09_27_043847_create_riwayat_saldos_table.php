<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatSaldosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_saldo', function (Blueprint $table) {
            $table->bigIncrements('id_riwayat_saldo');
            $table->bigInteger('id_user');
            $table->string('kode_instansi');
            $table->date('tanggal');
            $table->string('aksi', 100);
            $table->string('saldo_awal');
            $table->string('saldo');
            $table->string('jumlah_aksi');
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
        Schema::dropIfExists('riwayat_saldo');
    }
}
