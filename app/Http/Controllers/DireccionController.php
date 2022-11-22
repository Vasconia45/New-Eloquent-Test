<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccione;

class DireccionController extends Controller
{
    public function show(){
        $direcciones = Direccione::all();
        return view('layouts.createdirecciones', ['direcciones' => $direcciones]);
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

    public function delete($id){
        $direccion = Direccione::find($id);
        $direccion->delete();
        return redirect('/direccion')->with(['successful_message' => "The direccion has been deleted correctly"]);
    }
}
