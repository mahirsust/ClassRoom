<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch');
            $table->string('day');
            $table->string('eightnine');
            $table->string('nineten');
            $table->string('teneleven');
            $table->string('eleventwelve');
            $table->string('twelveone');
            $table->string('onetwo');
            $table->string('twothree');            
            $table->string('threefour');
            $table->string('fourfive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routines');
    }
}
