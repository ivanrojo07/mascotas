<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direccions';

    protected $fillable = ['id',
						    'calle',
						    'num_ext',
						    'num_int',
						    'cp',
						    'colonia',
						    'delegacion',
						    'ciudad',
						    'estado',
						    'fis_calle',
						    'fis_num_ext',
						    'fis_num_int',
						    'fis_cp',
						    'fis_colonia',
						    'fis_delegacion',
						    'fis_ciudad',
						    'fis_estado'];

    protected $hidden=[ 'created_at', 
    					'updated_at'];

    public function user(){
		return $this->belongsTo('App\Paciente');
	}
}
