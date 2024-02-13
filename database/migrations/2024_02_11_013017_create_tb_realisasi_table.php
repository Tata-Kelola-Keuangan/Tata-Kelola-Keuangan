<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRealisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_realisasi', function (Blueprint $table) {
            $table->id();
            $table->string('progres');
            $table->bigInteger('realisasi');
            $table->string('laporan_keuangan');
            $table->string('laporan_kegiatan');
            $table->string('ketercapaian_output');
            $table->date('tanggal_kontrak');
            $table->date('tanggal_pembayaran');
            $table->unsignedBigInteger('sub_perencanaan_id');
            $table->timestamps();

            $table->foreign('sub_perencanaan_id')->references('id')->on('tb_sub_perencanaan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_realisasi', function (Blueprint $table) {
            $table->dropForeign(['perencanaan_id']);
        });
    }
}
