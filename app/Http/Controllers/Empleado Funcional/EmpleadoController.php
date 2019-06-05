<?php

namespace App\Http\Controllers\Empleado;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
         $empleados = Empleado::whereNotIn('id', [1])->sortable()->paginate(10);
        return view('empleado.index', ['empleados' => $empleados]);
    }

    public function create()
    {
        // if($this->hasComponent('crear empleado')) {
        return view('empleado.create');
        // }
        // return redirect()->route('denegado');
    }

    public function store(Request $request)
    {
        // if(Empleado::where('rfc', $request->input('rfc'))->first())
        //     return redirect()->back()->with('errors','El RFC ya existe.');
        // else if (Empleado::where('email', $request->input('email'))->first())
        //     return redirect()->back()->with('errors','El email ya existe.');
        // else {
            $empleado = Empleado::create($request->all());
            return $this->index();
        //}
    }

    public function show(Empleado $empleado)
    {
        // if($this->hasComponent('ver empleado')) {
        return view('empleado.view', ['empleado' => $empleado]);
        // }
        // return redirect()->route('denegado');
    }

public function edit(Empleado $empleado/*, Laboral $laboral*/)
    {
        $contratos = TipoContrato::get();
        $areas =   Area::get();
        $puestos = [];
        $puesto = 0;
        $hayGerente = false;
        $empleados = Empleado::get();

        foreach ($empleados as $empl) {
            if (isset($empl->laborales->last()->oficina) && $empl->laborales->last()->oficina->id == $empleado->laborales->last()->oficina->id) {
                if ($empl->laborales->last()->puesto->id == 5) {
                    $hayGerente = true;
                }
            }
        }
        if ($empleado->laborales->last()->puesto->id == 5) {
            $hayGerente = true;
        }
        if(Auth::user()->perfil->id == 1)
            $puestos = Puesto::whereBetween('id', [2, 7])->get();

        else
            //$puestos = Puesto::whereBetween('id', [3, 7])->get();
            $puesto = Puesto::where('id', $empleado->laborales->last()->puesto->id - 1)->first();

        $regiones = Region::get();
        return view('empleado.laborales.edit', ['datoslab' => $laboral, 'contratos' => $contratos, 'empleado' => $empleado, 'areas' => $areas, 'puestos' => $puestos, 'regiones' => $regiones, 'puesto' => $puesto, 'hayGerente' => $hayGerente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $laborales = new Laboral($request->all());
        $empleado->laborales()->save($laborales);
        if($request->puesto_id == 5) {
            if(!$empleado->gerente) {
                if($empleado->subgerente)
                    $empleado->subgerente->delete();
                if($empleado->vendedor)
                    $empleado->vendedor->delete();
                $gerente = new Gerente();
                $empleado->gerente()->save($gerente);
            }
        } else if($request->puesto_id == 6) {
            if(!$empleado->subgerente) {
                if($empleado->gerente)
                    $empleado->gerente->delete();
                if($empleado->vendedor)
                    $empleado->vendedor->delete();
                $subgerente = new Subgerente();
                $empleado->subgerente()->save($subgerente);
            }
        } else if($request->puesto_id == 7) {
            if($empleado->vendedor)
                $empleado->vendedor()->update(['experto' => $request->experto]);
            else {
                if($empleado->gerente)
                    $empleado->gerente->delete();
                if($empleado->subgerente)
                    $empleado->subgerente->delete();
                $vendedor = new Vendedor(['experto' => $request->experto]);
                $empleado->vendedor()->save($vendedor);
            }
        }
        return redirect()->route('empleados.laborals.index', ['empleado' => $empleado]);
    }
}
