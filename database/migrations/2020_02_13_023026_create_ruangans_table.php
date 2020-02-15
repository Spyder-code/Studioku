<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_studio');
            $table->string('nama');
            $table->string('fasilitas');
            $table->integer('biaya');
            $table->integer('gitar');
            $table->integer('bass');
            $table->integer('mic');
            $table->integer('drum');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('id_studio')->references('id')->on('studios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruangans');
    }
}
