<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Direccione;
use App\Models\Post;

class UsuarioController extends Controller
{
    public function show(){
        $usuarios = Usuario::all();
        $direcciones = DIreccione::all();
        return view('createusers', ['usuarios' => $usuarios], ['direcciones' => $direcciones]);
    }

    public function showasign(){
        $usuarios = Usuario::all();
        $direcciones = Direccione::all();
        return view('asign', ['usuarios' => $usuarios], ['direcciones' => $direcciones]);
    }

    public function asign(Request $request){
        $usuario = Usuario::find($request->usuario);
        $direccion = Direccione::find($request->direccion);
        $direccion->usuario_id = $usuario->id;
        $direccion->save();
        return redirect('/usuario/asign')->with(['successful_message' => "Se asigno correctamente."]);
    }

    public function create(Request $request){
        $validateUser = $request->validate([
            'nombre' => 'required',
            /*'apellido' => 'required',
            'age' => 'required',
            'email' => 'required|email|unique',
            'date_of_birth' => 'required',
            'gender' => 'required|in:female,male'*/
        ]);
        if($validateUser){
            $usuario = new Usuario;
            $usuario->nombre = $request->nombre;
            $usuario->apellido = $request->apellido;
            $usuario->age = $request->edad;
            $usuario->email = $request->email;
            $usuario->date_of_birth = $request->date_birth;
            $usuario->gender = $request->gender;
            $usuario->save();
            return redirect('/usuario')->with(['successful_message' => "El usuario se creo correctamente."]);
        }
        else{
            return back()->with(['error_message' => "Hubo un error al crear el usuario."]);
    }
        }

    public function delete($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/usuario')->with(['successful_message' => "The user has been deleted corretcly."]);
    }

    public function userPost($id){
        $usuario = Usuario::find($id);
        $posts = Post::where('usuario_id', $id)
        ->get();
        return view('userPosts', ['usuario' => $usuario], ['posts' => $posts]);
    }
}
