<?php

use App\Http\Controllers\EquipoController;
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

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); 
});

Route::get('/equipos/index', [EquipoController::class, 'index']);

Route::get('/equipos/crear', [EquipoController::class, 'create']);

Route::get('/equipos/mostrar/{id}', [EquipoController::class, 'show']);

Route::get('/equipos/editar', [EquipoController::class, 'edit']);

Route::get('/equipos/eliminar', [EquipoController::class, 'destroy']);

Route::get('/partidos/index', [PartidoController::class, 'index']);

Route::get('/partidos/crear', [PartidoController::class, 'create']);

Route::get('/equipos/mostrar/{id}', [PartidoController::class, 'show']);

Route::get('/partidos/editar', [PartidoController::class, 'edit']);

Route::get('/partidos/eliminar', [PartidoController::class, 'destroy']);