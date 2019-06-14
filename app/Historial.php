<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{

	protected $table = 'historials';

	protected $fillable = [
	    'id',
	    'hora',
	    'fecha',
	    'motivo',
	    'medico_asiste',
	    'medico_tratante',
	    'peso',
	    'temperatura',
	    'sintomas',
	    'pruebas_lab',
	    'diagnostico',
	    'tratamiento',
	    'medicamentos',
	    'dieta'
	];
    

    protected $hidden = [
        'updated_at', 'created_at'
    ];

    public function mascota(){
        return $this->belongsTo('\App\Mascotas');
    } 
}
