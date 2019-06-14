<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mascotas_id')->unsigned()->nullable();
            $table->foreign('mascotas_id')->references('id')->on('mascota');
            $table->time('hora');
            $table->date('fecha');
            $table->text('motivo');
            $table->string('medico_asiste');
            $table->string('medico_tratante');
            $table->string('peso');
            $table->string('temperatura');
            $table->text('sintomas');
            $table->text('pruebas_lab');
            $table->text('diagnostico');
            $table->text('tratamiento');
            $table->text('medicamentos');
            $table->text('dieta');
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
        Schema::dropIfExists('historials');
    }
}
