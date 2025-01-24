<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ProjectController;

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

Route::resource('/employees', App\Http\Controllers\EmployeeController::class);
Route::get('/employees/{employee}/delete',
 [EmployeeController::class, 'delete'])->name('employees.delete');


Route::resource('/materials', App\Http\Controllers\MaterialController::class);
Route::get('/materials/{material}/delete',
 [MaterialController::class, 'delete'])->name('materials.delete');



Route::resource('/workers', App\Http\Controllers\WorkerController::class);
Route::get('/workers/{worker}/delete', 
[WorkerController::class, 'delete'])->name('workers.delete');


Route::resource('/projects', App\Http\Controllers\ProjectController::class);
Route::get('/projects/{project}/delete', 
[ProjectController::class, 'delete'])->name('projects.delete');