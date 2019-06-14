<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{

	protected $table = 'mascota';

    protected $fillable = [
        'id',
        'especie',
        'num_mascota',
        'apodo',
        'nombre',
        'raza',
        'sexo',
        'fecha_nac',
        'tatuaje',
        'chip',
        'esterilizado',
        'castrado',
        'medico_tratante',
        'observaciones'

    ];

    protected $hidden = [
        'updated_at', 'created_at'
    ];

    public function dueños(){
        return $this->belongsToMany('\App\Paciente','duenio_mascota');
            //->withPivot('menu_id','status'); 
    }

    public function historial(){
        return $this->hasMany('\App\Historial');
    } 

}
