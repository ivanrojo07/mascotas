<?php

namespace App\Http\Controllers\Empleado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleado;

class LaboralController extends Controller
{
    public function index(Empleado $empleado)
    {
    	return 'En construccion';
        // $laborales = $empleado->laborales;
        // if (count($laborales) > 0) {
        //     $subg = Empleado::find($laborales->first()->subgerente);
        //     $datoslab = $empleado->laborales->last();
        //     return view('empleado.laborales.index', ['empleado' => $empleado, 'laborales' => $laborales, 'datoslab' => $datoslab, 'subgerente' => $subg]); 
        // } else
        //     return redirect()->route('empleados.laborals.create', ['empleado' => $empleado]);
    }

//     public function create(Empleado $empleado)
//     {
//         $contratos = TipoContrato::get();
//         $areas =   Area::get();
//         if(Auth::user()->perfil->id == 1)
//             $puestos = Puesto::whereBetween('id', [2, 7])->get();
//         else
//             $puestos = Puesto::whereBetween('id', [3, 7])->get();
//         $regiones = Region::get();
//         return view('empleado.laborales.create', ['empleado' => $empleado, 'contratos' => $contratos, 'areas' => $areas, 'puestos' => $puestos, 'regiones' => $regiones]);
//     }
// }
