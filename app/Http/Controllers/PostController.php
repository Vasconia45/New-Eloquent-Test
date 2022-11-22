<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Post;

class PostController extends Controller
{
    public function show(){
        $usuarios = Usuario::all();
        return view('createposts', ['usuarios' => $usuarios]);
    }

    public function create(Request $request){
        $post = new Post;
        $post->titulo = $request->title;
        $post->texto = $request->text;
        $post->usuario_id = $request->post;
        $post->save();
        return redirect('/post')->with(['successful_message' => "The post has been created correctly."]);
    }
}
