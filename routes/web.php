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

//Recursos humanos
Route::resource('empleados','Empleado\EmpleadoController');
Route::resource('empleados.laborals','Empleado\LaboralController');
Route::resource('empleados.estudios','Empleado\EmpleadosEstudiosController');
Route::resource('empleados.emergencias','Empleado\EmpleadosEmergenciasController');
Route::resource('empleados.vacaciones','Empleado\EmpleadosVacacionesController');
Route::resource('empleados.faltas','Empleado\EmpleadosFaltasAdministrativasController');
Route::get('buscarempleado','Empleado\EmpleadoController@buscar');
Route::resource('vendedors','Vendedor\VendedorController');
Route::get('vendedors/{vendedor}/baja','Vendedor\VendedorController@bajar')->name('vendedors.baja');
Route::get('vendedors/{vendedor}/alta','Vendedor\VendedorController@activar')->name('vendedors.alta');
Route::get('asignarVendedores', 'Vendedor\VendedorController@asignar')->name('vendedor.asignar');
Route::post('unirVendedor', 'Vendedor\VendedorController@unir')->name('vendedores.unir');
Route::get('empleados/laborals/{empleado}/new-laboral', 'Empleado\LaboralController@newLaboral')->name('empleados.laborals.createLaborals');
Route::post('empleados/laborals/{empleado}/add', 'Empleado\LaboralController@addLaborals')->name('empleados.laborals.addLaborals');


//Proveedores
Route::resource('provedores','Provedor\ProvedorController');
Route::resource('provedores.direccionfisica','Provedor\ProvedorDireccionFisicaController');
Route::resource('provedores.datosgenerales','Provedor\ProvedorDatosGeneralesController');
Route::resource('provedores.contacto','Provedor\ProvedorContactoController');
Route::resource('provedores.datosbancarios','Provedor\ProveedorDatosBancariosController');