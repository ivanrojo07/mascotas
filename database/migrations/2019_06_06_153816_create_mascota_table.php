<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota', function (Blueprint $table) {
            $table->increments('id');
            $table->string('especie');
            $table->integer('num_mascota');
            $table->string('apodo')->nullable();
            $table->string('nombre');
            $table->string('raza');
            $table->string('sexo');
            $table->date('fecha_nac');
            $table->string('tatuaje')->nullable();
            $table->string('chip')->nullable();
            $table->string('esterilizado');
            $table->string('castrado');
            $table->string('medico_tratante');
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('mascota');
    }
}
