<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TemaController;

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
    Route::post('/usuario/posts/{id}', 'userPost')->name('usuario.post');
    Route::get('/usuario/posts/{id}', 'userPost')->name('usuario.post');
});

Route::controller(DireccionController::class)->group(function(){
    Route::get('/direccion', 'show')->name('newdireccion');
    Route::post('/direccion', 'create')->name('direccion.create');
    Route::delete('/direccion/{id}', 'delete')->name('direccion.delete');
});

Route::controller(PostController::class)->group(function(){
    Route::get('/post', 'show')->name('newpost');
    Route::post('/post', 'create')->name('post.create');
    Route::delete('/post/{id}', 'delete')->name('post.delete');
    Route::get('/post/{id}', 'showEdit')->name('editpost');
    Route::put('/post/{id}', 'edit')->name('post.update');
});

Route::controller(TemaController::class)->group(function(){
    Route::get('/tema', 'show')->name('newtema');
    Route::post('/tema', 'create')->name('tema.create');
    Route::delete('/tema/{tema}', 'delete')->name('tema.delete');
});