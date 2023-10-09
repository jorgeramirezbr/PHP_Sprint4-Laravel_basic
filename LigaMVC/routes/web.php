<?php

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard'); 
});

Route::get('/equipos/index', function () {
    return view('equipos/index');
});

Route::get('/equipos/crear', function () {
    return view('equipos/crear');
});

Route::get('/equipos/mostrar', function () {
    return view('equipos/mostrar');
});
Route::get('/equipos/editar', function () {
    return view('equipos/editar');
});
Route::get('/equipos/eliminar', function () {
    return view('equipos/eliminar');
});

Route::get('/partidos/index', function () {
    return view('partidos/index');
});

Route::get('/partidos/crear', function () {
    return view('partidos/crear');
});
Route::get('/partidos/mostrar', function () {
    return view('partidos/mostrar');
});

Route::get('/partidos/editar', function () {
    return view('partidos/editar');
});

Route::get('/partidos/eliminar', function () {
    return view('partidos/eliminar');
});