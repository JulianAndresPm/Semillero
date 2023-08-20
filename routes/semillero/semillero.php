<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\semillero\semilleroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/semillero', [semilleroController::class, 'index'])->name('semillero');
Route::get('/semillero/proyecto', [semilleroController::class, 'proyectos'])->name('semilleroProyecto');
Route::get('/semillero/adicionar', [semilleroController::class, 'adicionarProyectos'])->name('semilleroAdicionar');
Route::get('/semillero/editarProyectos', [semilleroController::class, 'editarProyectos'])->name('semilleroEditar');
Route::get('/semillero/editar/{id}', [semilleroController::class, 'editarProyectosUno'])->name('semilleroEditarUno');
Route::get('/semillero/adicionarMoni', [semilleroController::class, 'adicionarMonitor'])->name('adicionarMonitor');
Route::post('/semillero/adicionarMoni', [semilleroController::class, 'crearMonitor'])->name('crearMonitor');






