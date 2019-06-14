<?php

namespace App\Http\Controllers\Mascota;

use App\Historial;
use App\Mascotas;
use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mascotas $mascota)
    {
        return view('mascota.historial.index', ['mascota' => $mascota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mascotas $mascota)
    {
        return view('mascota.historial.create', ['mascota' => $mascota]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mascotas $mascota)
    {
        //$request['mascotas_id'] = $mascota->id;
        $historial = Historial::create($request->all());
        $mascota->historial()->save($historial);
        return redirect()->route('pacientes.show', ['paciente' => $mascota->paciente[0]]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function show(Mascotas $mascota, Historial $historial)
    {
        return view('mascota.historial.show', ['mascota' => $mascota ,'historial' => $historial]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function edit(Historial $historial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historial $historial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historial $historial)
    {
        //
    }
}
