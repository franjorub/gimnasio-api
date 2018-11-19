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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function() {
    return view('login');
});

Route::resource('cliente', 'ClienteController');
Route::get('cliente/crear-contrato/{id}', function ($id) {
    //
    $id_cliente = $id;
    return Redirect::action('ContratoController@create', compact('id_cliente'));
})->where('id', '[0-9]+');

Route::resource('factura', 'FacturaController');
Route::resource('contrato', 'ContratoController');
Route::resource('plan', 'PlanController');
Route::resource('servicio', 'ServicioController');