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
Auth::routes();

// RUTA EMPRENDIMIENTO
Route::resource('emprendimientos', App\Http\Controllers\EmprendimientoController::class)->middleware('auth');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTA DISTRITOS
Route::resource('distritos', App\Http\Controllers\DistritoController::class)->middleware('auth');

//RUTA EMPRESARIOS
Route::resource('empresarios', App\Http\Controllers\EmpresarioController::class)->middleware('auth');

//RUTA CLIENTES
Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');

//RUTA FILTRO DE PRUEBA

//Route::get('filtrar-emprendimientos', [App\Http\Controllers\EmprendimientoController::class, 'filtrar'])->middleware('auth')->name('filtrar-emprendimientos');
//Route::get('emprendimientos.index', [App\Http\Controllers\EmprendimientoController::class, 'index'])->middleware('auth')->name('emprendimientos.index');





