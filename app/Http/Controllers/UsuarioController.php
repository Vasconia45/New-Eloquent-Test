<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function show(){
        return view('layouts.createusers');
    }

    public function showasign(){
        
    }

    public function create(Request $request){
        $usuario = new Usuario;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->save();
        return redirect('/usuario')->with(['successful_message' => "El usuario se creo correctamente."]);
    }
}
