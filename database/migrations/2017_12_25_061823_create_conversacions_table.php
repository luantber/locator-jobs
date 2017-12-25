<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversacions', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('trabajo_id')->unsigned();
            $table->foreign('trabajo_id')->references('id')->on('trabajos');

            $table->string("mensaje");

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
        Schema::dropIfExists('conversacions');
    }
}
