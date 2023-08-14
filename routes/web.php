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
    return view('index');
});

// Pagina Web
Route::view('/about', 'about')->name('about');
Route::view('/activity', 'activity')->name('activity');


// Sistema
Auth::routes();
Route::resource('Actividades', \App\Http\Controllers\ActividadeController::class);

Route::resource('DetalleActividade', \App\Http\Controllers\DetalleActividadeController::class);
Route::resource('Eventos', \App\Http\Controllers\EventoController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
