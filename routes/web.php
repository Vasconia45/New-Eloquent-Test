<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DireccionController;

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

Route::view('/', 'layouts.main');

Route::controller(UsuarioController::class)->group(function(){
    Route::get('/usuario', 'show')->name('newuser');
    Route::post('/usuario', 'create')->name('usuario.create');
    Route::delete('/usuario/{id}', 'delete')->name('usuario.delete');
    Route::get('/usuario/asign', 'showasign')->name('asign');
    Route::post('/usuario/asign', 'asign')->name('usuario.asign');
});

Route::controller(DireccionController::class)->group(function(){
    Route::get('/direccion', 'show')->name('newdireccion');
    Route::post('/direccion', 'create')->name('direccion.create');
    Route::delete('/direccion/{id}', 'delete')->name('direccion.delete');
});