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
    return view('home');
});

//Route::get('/', function () {
  //  return view('auth.login');
//});
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

//RUTA CATALOGO
Route::resource('catalogos', App\Http\Controllers\CatalogoController::class)->middleware('auth');

// En web.php

Route::get('mostrar-catalogos/{idEmprendimiento}', [App\Http\Controllers\EmprendimientoController::class, 'mostrarCatalogos'])->name('mostrar.catalogos');
Route::get('catalogos-por-emprendimiento/{idEmprendimiento}', [App\Http\Controllers\CatalogoController::class, 'indexPorEmprendimiento'])->name('catalogos.por.emprendimiento');

//RUTA FILTRO DE PRUEBA

//Route::get('tipoFiltrado/{tipo}', [App\Http\Controllers\EmprendimientoController::class, 'filtrarPorTipo'])->middleware('auth')->name('tipoFiltrado');
Route::get('filtrar-emprendimientos/{tipo}', [App\Http\Controllers\EmprendimientoController::class, 'filtrarEmprendimientosPorTipo'])->name('filtrar-emprendimientos');

//Route::get('filtrar-emprendimientos/{tipo}', 'EmprendimientoController@filtrarEmprendimientosPorTipo')->name('filtrar-emprendimientos');


//Route::get('filtrar-emprendimientos', [App\Http\Controllers\EmprendimientoController::class, 'filtrar'])->middleware('auth')->name('filtrar-emprendimientos');
//Route::get('emprendimientos.index', [App\Http\Controllers\EmprendimientoController::class, 'index'])->middleware('auth')->name('emprendimientos.index');





