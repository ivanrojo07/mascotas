<?php

namespace App\Http\Controllers\Paciente;

use App\Paciente;
use App\Direccion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PacienteDireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Paciente $paciente)
    {
        return view('paciente.direccion.create', ['paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Paciente $paciente)
    {
        $validator = Validator::make($request->all(), [
            'calle' => 'required|string',
            'num_ext' => 'required|numeric',
            'num_int' => 'nullable|numeric',
            'cp' => 'required|numeric',
            'colonia' => 'required|string',
            'delegacion' => 'required|string',
            'ciudad' => 'required|string',
            'estado' => 'required|string',
            'fis_calle' => 'nullable|string',
            'fis_num_ext' => 'nullable|numeric',
            'fis_num_int' => 'nullable|numeric',
            'fis_cp' => 'nullable|numeric',
            'fis_colonia' => 'nullable|string',
            'fis_delegacion' => 'nullable|string',
            'fis_ciudad' => 'nullable|string',
            'fis_estado' => 'nullable|string',
        ],[],[
            'cp' => 'Código Postal',
            'correo' => 'Correo',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator->errors())
                        ->withInput();
        }
        $direccion = Direccion::create($request->all());
        $paciente->direccion()->save($direccion);
        return redirect()->route('pacientes.show', ['paciente' => $paciente]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente, Direccion $direccion)
    {
        return view('paciente.direccion.edit', ['paciente' => $paciente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $validator = Validator::make($request->all(), [
            'calle' => 'required|string',
            'num_ext' => 'required|numeric',
            'num_int' => 'nullable|numeric',
            'cp' => 'required|numeric',
            'colonia' => 'required|string',
            'delegacion' => 'required|string',
            'ciudad' => 'required|string',
            'estado' => 'required|string',
            'fis_calle' => 'nullable|string',
            'fis_num_ext' => 'nullable|numeric',
            'fis_num_int' => 'nullable|numeric',
            'fis_cp' => 'nullable|numeric',
            'fis_colonia' => 'nullable|string',
            'fis_delegacion' => 'nullable|string',
            'fis_ciudad' => 'nullable|string',
            'fis_estado' => 'nullable|string',
        ],[],[
            'cp' => 'Código Postal',
            'correo' => 'Correo',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator->errors())
                        ->withInput();
        }
        $paciente->direccion->update($request->all());
        return redirect()->route('pacientes.show', ['paciente' =>$paciente]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
