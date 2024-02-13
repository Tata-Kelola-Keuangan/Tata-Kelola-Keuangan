<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSubPerencanaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sub_perencanaan', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->string('satuan');
            $table->string('volume');
            $table->integer('harga_satuan');
            $table->integer('output');
            $table->date('rencana_mulai');
            $table->date('rencana_bayar');
            $table->string('file_hps');
            $table->string('file_kak');
            $table->unsignedBigInteger('perencanaan_id');
            $table->unsignedBigInteger('pic_id');
            $table->unsignedBigInteger('ppk_id');
            $table->timestamps();

            $table->foreign('perencanaan_id')->references('id')->on('tb_perencanaan')->onDelete('cascade');
            $table->foreign('pic_id')->references('id')->on('tb_pegawai')->onDelete('cascade');
            $table->foreign('ppk_id')->references('id')->on('tb_ppk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_sub_perencanaan', function (Blueprint $table) {
            $table->dropForeign(['perencanaan_id']);
            $table->dropForeign(['pic_id']);
            $table->dropForeign(['ppk_id']);
        });
    }
}
