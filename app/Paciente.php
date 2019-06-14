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

    public function mascotas(){
        return $this->belongsToMany('\App\Mascotas','duenio_mascota');
            //->withPivot('menu_id','status');
    }

    public function direccion() {
        return $this->hasOne('App\Direccion');
    }

    public function getFullnameAttribute (){
        return $this->nombre_dueño ." ". $this->appaterno_dueño." ".$this->apmaterno_dueño;
    }

}
