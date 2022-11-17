@extends('layouts.main')

@section('title', "New User")

@section('content')
    @if(session('successful_message'))
        {{ session('successful_message') }}
    @endif
    <div>
        <form action="{{ route('usuario.create') }}" method="POST">
        @csrf
            <div>
                <label for="nombre">Nombre:</label>
                <div>
                    <input type="text" id="nombre" name="nombre">
                </div>
            </div>

            <div>
                <label for="apellido">Apellido:</label>
                <div>
                    <input type="text" id="apellido" name="apellido">
                </div>
            </div>

            <div>
                <button type="submit">Add Usuario</button>
            </div>
        </form>
    </div>
@endsection