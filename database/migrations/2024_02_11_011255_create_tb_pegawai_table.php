<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->date('tgl_lahir');
            $table->string('nama');
            $table->string('nomor_induk');
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->string('telepon');
            $table->string('alamat');
            $table->string('email');
            $table->unsignedBigInteger('unit_id');
            $table->string('KK');
            $table->string('NPWP');
            $table->enum('jenis', ['Jenis 1', 'Jenis 2']);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('tb_unit')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pegawai', function (Blueprint $table) {
            $table->dropForeign(['unit_id']);
            $table->dropForeign(['user_id']);
        });
    }
}
