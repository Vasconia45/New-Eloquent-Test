<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', function(){
    return Usuario::all();
});

Route::get('/posts/{id}', function($id){
    $posts = Post::where('usuario_id', $id)
    ->orderBy('titulo', 'ASC')
    ->get();
    return $posts;
});

Route::post('/posts/recent', function(){
    $posts = Post::where('created_at', '2022-11-29')
    ->get();
    return $posts;
});
