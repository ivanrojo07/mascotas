<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// SEGURIDAD
//Route::resource('usuarios', 'Usuario\UsuarioController');
//Route::resource('perfils', 'Perfil\PerfilController');

//Recursos humanos
Route::resource('empleados','Empleado\EmpleadoController');
Route::resource('empleados.laborals','Empleado\LaboralController');
Route::resource('empleados.estudios','Empleado\EmpleadosEstudiosController');
Route::resource('empleados.emergencias','Empleado\EmpleadosEmergenciasController');
Route::resource('empleados.vacaciones','Empleado\EmpleadosVacacionesController');
Route::resource('empleados.faltas','Empleado\EmpleadosFaltasAdministrativasController');
Route::get('buscarempleado','Empleado\EmpleadoController@buscar');
Route::get('empleados/laborals/{empleado}/new-laboral', 'Empleado\LaboralController@newLaboral')->name('empleados.laborals.createLaborals');
Route::post('empleados/laborals/{empleado}/add', 'Empleado\LaboralController@addLaborals')->name('empleados.laborals.addLaborals');

//Proveedores
Route::resource('provedores','Provedor\ProvedorController');
Route::resource('provedores.direccionfisica','Provedor\ProvedorDireccionFisicaController');
Route::resource('provedores.datosgenerales','Provedor\ProvedorDatosGeneralesController');
Route::resource('provedores.contacto','Provedor\ProvedorContactoController');
Route::resource('provedores.datosbancarios','Provedor\ProveedorDatosBancariosController');

//Pacientes
Route::resource('pacientes', 'Paciente\PacienteController');