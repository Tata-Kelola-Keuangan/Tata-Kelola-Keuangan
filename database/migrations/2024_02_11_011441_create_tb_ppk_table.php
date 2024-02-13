<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPpkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ppk', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_anggaran');
            $table->unsignedBigInteger('pegawai_id');
            $table->timestamps();

            $table->foreign('pegawai_id')->references('id')->on('tb_pegawai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_ppk', function (Blueprint $table) {
            $table->dropForeign(['pegawai_id']);
        });
    }
}
