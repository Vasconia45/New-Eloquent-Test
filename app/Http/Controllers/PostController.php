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
        return redirect('/usuario/posts/' . $post->usuario_id . '')->with(['successful_message' => "The post has been created correctly."]);
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with(['successful_message' => "The post has been deleted correctly."]);
    }

    public function showEdit($id){
        $post = Post::find($id);
        return view('editPost', ['post' => $post]);
    }

    public function edit(Request $request, $id){
        $post = Post::find($id);
        $post->titulo = $request->title;
        $post->texto = $request->text;
        $post->save();
        return redirect('/usuario/posts/'. $post->usuario_id . '')->with(['successful_message' => "The post has been updated correctly."]);
    }
}
