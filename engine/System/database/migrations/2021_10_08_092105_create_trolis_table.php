<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrolisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troli', function (Blueprint $table) {
            $table->bigIncrements('id_troli');
            $table->string('id_instansi', 30);
            $table->bigInteger('id_kantin');
            $table->bigInteger('id_user');
            $table->bigInteger('id_product');
            $table->string('no_faktur');
            $table->integer('jumlah_product');
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
        Schema::dropIfExists('troli');
    }
}
