<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('kode_instansi');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('pin', 20)->nullable();
            $table->string('qr_code')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->string('route')->nullable();
            $table->string('status_user', 15);
            $table->string('user_join')->nullable();
            $table->string('name_table_join')->nullable();
            $table->integer('saldo')->unsigned();
            $table->string('foto');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
