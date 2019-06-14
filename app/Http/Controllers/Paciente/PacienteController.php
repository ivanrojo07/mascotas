<?php

namespace App\Http\Controllers\Paciente;

use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::get();
        return view('paciente.index', ['pacientes' => $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = Paciente::get();
        if ($pacientes->count() == 0)
            $id = 0;
        else
            $id = $pacientes->count();
        return view('paciente.create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre_dueño' => 'required|string',
            'appaterno_dueño' => 'required|string',
            'apmaterno_dueño' => 'nullable|alpha',
            'rfc' => 'required|alpha_num',
            'correo' => 'required|email',
            'telefono' => 'nullable|numeric',
            'celular' => 'nullable|numeric|required',
            'whatsapp' => 'required|alpha_num',
        ],[],[
            'nombre_dueño' => 'nombre',
            'appaterno_dueño' => 'apellido paterno',
            'apmaterno_dueño' => 'apellido materno',
            'rfc' => 'RFC',
            'correo' => 'Correo',
        ]);
        if ($validator->fails()) {
            return redirect('pacientes/create')
                        ->withErrors($validator->errors())
                        ->withInput();
        }
        $paciente = Paciente::create($request->all());
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
        return view('paciente.show', ['paciente' =>$paciente]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('paciente.edit', ['paciente' => $paciente]);
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
            'nombre_dueño' => 'required|string',
            'appaterno_dueño' => 'required|string',
            'apmaterno_dueño' => 'nullable|alpha',
            'rfc' => 'required|alpha_num',
            'correo' => 'required|email',
            'telefono' => 'nullable|numeric',
            'celular' => 'nullable|numeric|required',
            'whatsapp' => 'required|alpha_num',
        ],[],[
            'nombre_dueño' => 'nombre',
            'appaterno_dueño' => 'apellido paterno',
            'apmaterno_dueño' => 'apellido materno',
            'rfc' => 'RFC',
            'correo' => 'Correo',
        ]);
        if ($validator->fails()) {
            return redirect('pacientes/create')
                        ->withErrors($validator->errors())
                        ->withInput();
        }
        $paciente->update($request->all());
        return redirect()->route('pacientes.show', ['paciente' => $paciente]);
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
