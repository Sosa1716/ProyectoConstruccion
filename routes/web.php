<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\ProyectoController;

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

Route::get('/', function () {
    return view('index');
}) -> name('index');

Route::resource('/empleados', EmpleadoController::class);
Route::get('/empleados/{empleado}/delete', [EmpleadoController::class, 'delete'])->name('empleados.delete');


Route::resource('/materiales', MaterialController::class);
Route::get('/materiales/{material}/delete', [MaterialController::class, 'delete'])->name('materiales.delete');



Route::resource('/trabajadores', TrabajadorController::class);
Route::get('/trabajadores/{trabajador}/delete', [TrabajadorController::class, 'delete'])->name('trabajadores.delete');


Route::resource('/proyectos', ProyectoController::class);
Route::get('/proyectos/{proyecto}/delete', [ProyectoController::class, 'delete'])->name('proyectos.delete');