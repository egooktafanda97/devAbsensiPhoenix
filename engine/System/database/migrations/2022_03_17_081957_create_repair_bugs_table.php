<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairBugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_bugs', function (Blueprint $table) {
            $table->bigIncrements('id_bug');
            $table->bigInteger('id_user');
            $table->bigInteger('id_kantin')->nullable();
            $table->longText('history_transaksi_siswa');
            $table->longText('group_error_siswa');
            $table->longText('group_error_kantin')->nullable();
            $table->string('saldo_siswa');
            $table->string('perubahan_saldo_siswa');
            $table->string('saldo_kantin')->nullable();
            $table->string('perubahan_saldo_kantin')->nullable();
            $table->string('pesan')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('repair_bugs');
    }
}
