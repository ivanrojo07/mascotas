<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{

	protected $table = 'mascota';

    protected $fillable = [
        'id',
        'nombre',
        'raza'
    ];

    protected $hidden = [
        'updated_at', 'created_at'
    ];

    public function dueños()
    {
    	return $this->hasMany('App\Dueño');
    }
}
