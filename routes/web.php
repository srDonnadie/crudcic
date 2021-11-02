<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes(['register'=>true, 'reset'=>false]);

//*Aca comienza las rutas de todas las vistas------------------------------------

Route::resource('equipos', App\Http\Controllers\EquipoController::class)->middleware('auth');

Route::resource('equipos-usuarios', App\Http\Controllers\EquiposUsuarioController::class)->middleware('auth');

Route::resource('mantenimientos', App\Http\Controllers\MantenimientoController::class)->middleware('auth');

Route::resource('accesorios', App\Http\Controllers\AccesorioController::class)->middleware('auth');

Route::resource('software-instalados', App\Http\Controllers\SoftwareInstaladoController::class)->middleware('auth');

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->middleware('auth');

//*Hata aca son las rutas de todas las vistas--------------------------------------

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
