<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuenioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duenio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_dueño');
            $table->string('appaterno_dueño');
            $table->string('apmaterno_dueño')->nullable();
            $table->string('rfc'); 
            $table->string('telefono')->nullable();
            $table->string('celular');
            $table->string('correo');
            $table->string('whatsapp');
            $table->string('noticias');
            $table->softDeletes();
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
        Schema::dropIfExists('dueño');
    }
}
