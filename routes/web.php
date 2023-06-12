<?php

use App\Http\Controllers\proyectosController;
use Illuminate\Support\Facades\Route;

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

//Ruta para mostrar la vista de proyectos
Route::get("/", [proyectosController::class, "index"])->name("crud.index");

//Ruta para agregar proyecto
Route::post("/", [proyectosController::class, "create"])->name("crud.create");

/*Route::get('/', function () {
    return view('welcome');
});
*/