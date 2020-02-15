<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_ruangan');
            $table->string('nama');
            $table->string('nomor');
            $table->string('nama_band');
            $table->string('sewa');
            $table->dateTime('waktu');
            $table->timestamps();

            $table->foreign('id_ruangan')->references('id')->on('ruangans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
}
