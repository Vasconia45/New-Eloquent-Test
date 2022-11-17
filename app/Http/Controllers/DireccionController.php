<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccione;

class DireccionController extends Controller
{
    public function show(){
        return view('layouts.createdirecciones');
    }

    public function create(Request $request){
        $direccion = new Direccione;
        $direccion->calle = $request->calle;
        $direccion->numero = $request->numero;
        $direccion->cod_postal = $request->postal;
        $direccion->municipio = $request->municipio;
        $direccion->save();
        return redirect('/direccion')->with(['successful_message' => "La direccion se añadio perfectamente."]);
    }
}
