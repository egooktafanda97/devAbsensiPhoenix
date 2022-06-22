<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id_product');
            $table->integer('user_id');
            $table->integer('id_kantin');
            $table->string('kode_instansi', 100);
            $table->string('nama_produk', 100);
            $table->string('jenis_produk', 100);
            $table->string('kategori_produk', 100);
            $table->string('harga_produk', 100);
            $table->string('satuan_produk', 100);
            $table->string('deskripsi', 100);
            $table->string('gambar', 200);
            $table->integer('stok');
            $table->string('status', 100);
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
        Schema::dropIfExists('product');
    }
}
