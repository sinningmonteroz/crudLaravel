<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ContenidoController;

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

Route::controller(ContenidoController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('p/create', 'create')->name('crear.contenido');
    Route::get('p/modify/{id}', 'modify');
    Route::get('p/delete/{id}', 'delete');
    Route::get('p/{id}', 'ver')->name('ver.contenido');
});

Route::controller(UsuariosController::class)->group(function(){
Route::get('register', 'create')->name('crear.usuario');
Route::get('login', 'login')->name('login');
Route::get('{usuario}', 'ver')->name('perfil');
Route::get('u/modify/{usuario}', 'modify');
Route::get('u/delete/{usuario}', 'delete');
});