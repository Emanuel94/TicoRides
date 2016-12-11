<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name_ride');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');
            $table->string('start');
            $table->string('end');
            $table->string('place_start')->nullable();
            $table->string('place_end')->nullable();
            $table->string('lat_start')->nullable();
            $table->string('long_start')->nullable();
            $table->string('lat_end')->nullable();
            $table->string('long_end')->nullable();    
            $table->string('descripcion');
            $table->dateTime('hour_start');
            $table->dateTime('hour_end');
            $table->boolean('activo');
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
        Schema::dropIfExists('rides');
    }
}
