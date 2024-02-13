<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPejabatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pejabat', function (Blueprint $table) {
            $table->id();
            $table->string('mulai');
            $table->string('selesai');
            $table->string('SK');
            $table->unsignedBigInteger('pegawai_id');
            $table->unsignedBigInteger('unit_id');
            $table->timestamps();

            $table->foreign('pegawai_id')->references('id')->on('tb_pegawai')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('tb_unit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pejabat', function (Blueprint $table) {
            $table->dropForeign(['pegawai_id']);
            $table->dropForeign(['unit_id']);
        });
    }
}
