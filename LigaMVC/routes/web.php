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
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); 
});

Route::get('equipos', [EquipoController::class, 'index'])->name('equipos.index');

Route::get('equipos/create', [EquipoController::class, 'create'])->name('equipos.create');

Route::post('equipos', [EquipoController::class, 'store'])->name('equipos.store');

Route::get('equipos/{equipo}', [EquipoController::class, 'show'])->name('equipos.show');

Route::get('equipos/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');

Route::put('equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');

Route::delete('equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

Route::get('partidos', [PartidoController::class, 'index'])->name('partidos.index');

Route::get('partidos/create', [PartidoController::class, 'create'])->name('partidos.create');

Route::post('partidos', [PartidoController::class, 'store'])->name('partidos.store');

Route::get('partidos/{partido}', [PartidoController::class, 'show'])->name('partidos.show');

Route::get('partidos/{partido}/edit', [PartidoController::class, 'edit'])->name('partidos.edit');

Route::put('partidos/{partido}', [PartidoController::class, 'update'])->name('partidos.update');

Route::delete('partidos/{partido}', [PartidoController::class, 'destroy'])->name('partidos.destroy');