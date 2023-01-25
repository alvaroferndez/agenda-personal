<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HoraController;
use App\Http\Controllers\HorarioController;
use App\Models\Hora;

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

//asignaturas
Route::get('/asignaturas', function () {
    return view('asignaturas/lista');
});

Route::get('/asignaturas', [AsignaturaController::class, 'index']);
Route::get('/asignaturas/crear', [AsignaturaController::class, 'create']);
Route::post('/asignaturas/crear',  [AsignaturaController::class, 'store']);
Route::get('/asignaturas/ver/{id}', [AsignaturaController::class, 'show']);
Route::get('/asignaturas/editar/{id}', [AsignaturaController::class, 'edit']);
Route::put('/asignaturas/editar/{id}', [AsignaturaController::class, 'update']);
Route::get('/asignaturas/eliminar/{id}', [AsignaturaController::class, 'destroy']);

//horas
Route::get('/horas', function () {
    return view('horas/lista');
});

Route::get('/horas', [HoraController::class, 'index']);
Route::get('/horas/crear', [HoraController::class, 'create']);
Route::post('/horas/crear',  [HoraController::class, 'store']);
Route::get('/horas/eliminar/{dia}/{hora}', [HoraController::class, 'destroy']);


//horario
Route::get('/horario', [HorarioController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
