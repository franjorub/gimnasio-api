<?php
use Illuminate\Support\Facades\Auth;
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
})->middleware('auth');

Route::get('/', function() {
    return view('login');
})->name('login');

Route::get('/register', function(){
    return view('register');
});

Route::post('/authenticate', 'AuthenticateController@check');
Route::get('/authenticate/logout', 'AuthenticateController@logout');

Route::resource('usuario', 'UsuarioController');
Route::resource('cliente', 'ClienteController')->middleware('auth');
Route::get('cliente/crear-contrato/{id}', function ($id) {
    //
    $id_cliente = $id;
    return Redirect::action('ContratoController@create', compact('id_cliente'));
})->where('id', '[0-9]+')->middleware('auth');

Route::resource('factura', 'FacturaController')->middleware('auth');
Route::resource('contrato', 'ContratoController')->middleware('auth');
Route::resource('plan', 'PlanController')->middleware('auth');
Route::resource('servicio', 'ServicioController')->middleware('auth');