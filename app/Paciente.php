<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
	use SoftDeletes;

	protected $table = 'pacientes';

	protected $dates = ['deleted_at'];

    protected $fillable = [
        'id',
        'nombre_dueño',
        'appaterno_dueño',
        'apmaterno_dueño',
        'nombre_mascota',
        'raza',
        'telefono',
        'celular',
        'correo'
    ];

}
