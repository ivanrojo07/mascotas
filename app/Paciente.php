<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
	use SoftDeletes;

	protected $table = 'duenio';

	protected $dates = ['deleted_at'];

    protected $fillable = [
        'id',
        'nombre_dueño',
        'appaterno_dueño',
        'apmaterno_dueño',
        'rfc',
        'noticias',
        'telefono',
        'whatsapp',
        'celular',
        'correo'
    ];

    protected $hidden = [
        'updated_at', 'created_at', 'deleted_at'
    ];

    public function mascota()
    {
        return $this->hasOne('App\Mascota');
    }

    public function getFullnameAttribute (){
        return $this->nombre_dueño ." ". $this->appaterno_dueño." ".$this->apmaterno_dueño;
    }

}
