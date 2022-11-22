<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Direccione;

class UsuarioController extends Controller
{
    public function show(){
        $usuarios = Usuario::all();
        return view('layouts.createusers', ['usuarios' => $usuarios]);
    }

    public function showasign(){
        $usuarios = Usuario::all();
        $direcciones = Direccione::all();
        return view('layouts.asign', ['usuarios' => $usuarios], ['direcciones' => $direcciones]);
    }

    public function asign(Request $request){
        $usuario = Usuario::find($request->usuario);
        $direccion = Direccione::find($request->direccion);
        $direccion->usuario_id = $usuario->id;
        $direccion->save();
        return redirect('/usuario/asign')->with(['successful_message' => "Se asigno correctamente."]);
    }

    public function create(Request $request){
        $usuario = new Usuario;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->save();
        return redirect('/usuario')->with(['successful_message' => "El usuario se creo correctamente."]);
    }

    public function delete($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/usuario')->with(['successful_message' => "The user has been deleted corretcly."]);
    }
}
