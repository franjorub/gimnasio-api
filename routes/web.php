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

Route::resource('clientes', 'ClientesController');
Route::resource('contratos', 'ContratosController');
Route::resource('facturas', 'FacturasController');
Route::get('login', 'UsuarioController@index');
Route::get('/logout', 'UsuarioController@logout');
Route::post('/login/auth', 'UsuarioController@authenticate');
Route::get('/usuario/nuevo', 'UsuarioController@create');
Route::post('/usuario/crear', 'UsuarioController@store');