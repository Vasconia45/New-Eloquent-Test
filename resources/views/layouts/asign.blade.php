@extends('layouts.main')

@section('title', "Asign")

@section('content')
<form action="{{ route('usuario.asign') }}" method="POST">
                            @csrf
                            <div>
                                <div>
                                    <select name="usuario" id="usuario">
                                        @foreach($usuarios as $usuario)
                                            <option value="{{ $usuario->id }}"> {{ $usuario->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <br>
                                <div>
                                    <select name="direccion" id="direccion">
                                        @foreach($direcciones as $direccion)
                                            <option value="{{ $direccion->id }}">{{ $direccion->calle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div>
                                <button type="submit" id="boton">Asign</button>
                            </div>
@endsection