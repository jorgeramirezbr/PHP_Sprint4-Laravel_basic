<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;
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

Route::get('/equipos/create', [EquipoController::class, 'create']);

Route::get('/equipos/store', [EquipoController::class, 'store']);

Route::get('/equipos/show', [EquipoController::class, 'show']);

Route::get('/equipos/edit', [EquipoController::class, 'edit']);

Route::get('/equipos/update', [EquipoController::class, 'update']);

Route::get('/equipos/destroy', [EquipoController::class, 'destroy']);

Route::get('/partidos/index', [PartidoController::class, 'index']);

Route::get('/partidos/create', [PartidoController::class, 'create']);

Route::get('/partidos/store', [PartidoController::class, 'store']);

Route::get('/partidos/show', [PartidoController::class, 'show']);

Route::get('/partidos/edit', [PartidoController::class, 'edit']);

Route::get('/partidos/update', [PartidoController::class, 'update']);

Route::get('/partidos/destroy', [PartidoController::class, 'destroy']);