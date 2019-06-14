<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuenioMascotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duenio_mascota', function (Blueprint $table) {
            $table->increments('id');
           $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('duenio');
            $table->integer('mascotas_id')->unsigned();
            $table->foreign('mascotas_id')->references('id')->on('mascota');
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
        Schema::dropIfExists('duenio_mascota');
    }
}
