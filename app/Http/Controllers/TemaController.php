<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;

class TemaController extends Controller
{
    public function show(){
        $temas = Tema::all();
        return view('createtemas', ['temas' => $temas]);
    }

    public function create(Request $request){
        $tema = new Tema;
        $tema->nombre = $request->nombre;
        $tema->save();
        return redirect('/tema')->with(['successful_message' => "El tema se creo correctamente."]);
    }

    public function delete(Tema $tema){
        $tema->delete();
        return redirect('/tema')->with(['successful_message' => "El tema se borro correctamente."]);
    }
}
