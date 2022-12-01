@extends('layouts.main')

@section('title', "New User")

@section('content')
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
                <label for="edad">Edad:</label>
                <div>
                    <input type="text" id="edad" name="edad">
                </div>
            </div>

            <div>
                <label for="email">Email:</label>
                <div>
                    <input type="text" id="email" name="email">
                </div>
            </div>

            <div>
                <label for="date_birth">Fecha de nacimiento:</label>
                <div>
                    <input type="date" id="date_birth" name="date_birth">
                </div>
            </div>

            <div>
                <label for="gender">Genero:</label>
                <div>
                    <input type="text" id="gender" name="gender">
                </div>
            </div>

            <div>
                <button type="submit">Add Usuario</button>
            </div>
        </form>

        <div>
            <table>
                <thead>Usuarios:</thead>
                <br>
                <tbody>
                    @each('partials.usuario', $usuarios, 'usuario', 'partials.empty')
                </tbody>
            <table>
        </div>
    </div>
@endsection