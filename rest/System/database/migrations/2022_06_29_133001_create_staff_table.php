<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id_staf');
            $table->bigInteger('id_user');
            $table->string('kode_instansi', 30);
            $table->string('nama_lengkap');
            $table->string('nip');
            $table->string('tmp_lahir');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('alamat_rumah');
            $table->string('telepon');
            $table->integer('id_jabatan');
            $table->string('tgl_masuk');
            $table->string('unit_konsentrasi');
            $table->string('status_guru');
            $table->string('status_mengajar');
            $table->string('status_pns');
            $table->string('status_staff');
            $table->string('table_relation', 30);
            $table->bigInteger('id_relation', 20);
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
        Schema::dropIfExists('staff');
    }
}
