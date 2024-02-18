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
            $table->string('NIK')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('nama');
            $table->string('nomor_induk')->nullable();
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email');
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->string('KK')->nullable();
            $table->string('NPWP')->nullable();
            $table->enum('jenis', ['Jenis 1', 'Jenis 2'])->nullable();
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
