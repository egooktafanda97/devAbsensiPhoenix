<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_kantin', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi_kantin');
            $table->string('id_instansi');
            $table->bigInteger('user_kantin');
            $table->bigInteger('user_siswa');
            $table->string('kode_faktur');
            $table->string('total_belanja');
            $table->string('total_bayar');
            $table->text('catatan_transaksi');
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
        Schema::dropIfExists('transaksi_kantin');
    }
}
