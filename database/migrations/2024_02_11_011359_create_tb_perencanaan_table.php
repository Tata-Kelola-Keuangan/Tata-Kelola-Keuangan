<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPerencanaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_perencanaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kd_perencanaan');
            $table->string('sumber');
            $table->integer('revisi');
            $table->unsignedBigInteger('unit_id');
            $table->timestamps();

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
        Schema::table('tb_perencanaan', function (Blueprint $table) {
            $table->dropForeign(['unit_id']);
        });
    }
}
