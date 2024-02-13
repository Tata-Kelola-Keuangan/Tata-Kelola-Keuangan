<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPenugasanPpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penugasan_pp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pp_id');
            $table->unsignedBigInteger('sub_perencanaan_id');
            $table->timestamps();

            $table->foreign('pp_id')->references('id')->on('tb_pp')->onDelete('cascade');
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
        Schema::dropIfExists('tb_penugasan_pp', function (Blueprint $table) {
            $table->dropForeign(['sub_perencanaan_id']);
            $table->dropForeign(['pp_id']);
        });
    }
}