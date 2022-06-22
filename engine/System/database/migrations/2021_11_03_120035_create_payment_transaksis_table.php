<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_paytransaksi');
            $table->string("key_reference");
            $table->string("kode_instansi", 30);
            $table->bigInteger("id_user");
            $table->bigInteger("id_tujuan");
            $table->string("jumlah");
            $table->string("sub_jumlah");
            $table->string("method");
            $table->string("provider");
            $table->dateTime("expired_at");
            $table->string("status");
            $table->text("request");
            $table->text("response");
            $table->text("it_get");
            $table->string("status_transaksi");
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
        Schema::dropIfExists('payment_transaksi');
    }
}
