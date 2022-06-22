<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKantinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kantin', function (Blueprint $table) {
            $table->bigInteger('id_kantin')->increments();
            $table->string('kode_instansi', 100);
            $table->string('nama_kantin', 200);
            $table->string('nama_pemilik', 200);
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
        Schema::dropIfExists('kantin');
    }
}
