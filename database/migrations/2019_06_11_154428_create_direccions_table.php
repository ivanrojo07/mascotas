<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned()->nullable();
            $table->foreign('paciente_id')->references('id')->on('duenio');
            $table->string('calle');
            $table->integer('num_ext');
            $table->integer('num_int')->nullable();
            $table->integer('cp');
            $table->string('colonia');
            $table->string('delegacion');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('fis_calle');
            $table->integer('fis_num_ext');
            $table->integer('fis_num_int')->nullable();
            $table->integer('fis_cp');
            $table->string('fis_colonia');
            $table->string('fis_delegacion');
            $table->string('fis_ciudad');
            $table->string('fis_estado');
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
        Schema::dropIfExists('direccions');
    }
}
