@extends('layouts.main')

@section('title', "New User")

@section('content')
    <div>
        <form action="{{ route('usuario.create') }}" method="POST">
        @csrf
            <div>
                <label for="nombre">Nombre:</label>
                <div>
                    <input type="text" class="@error('nombre') @enderror" id="nombre" name="nombre">
                    @error('nombre')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label for="apellido">Apellido:</label>
                <div>
                    <input type="text" class="@error('apellido') @enderror" id="apellido" name="apellido">
                    @error('apellido')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label for="age">Edad:</label>
                <div>
                    <input type="text" class="@error('age') @enderror" id="age" name="age">
                    @error('age')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label for="email">Email:</label>
                <div>
                    <input type="text" class="@error('email') @enderror" id="email" name="email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label for="date_of_birth">Fecha de nacimiento:</label>
                <div>
                    <input type="date" class="@error('date_of_birth') @enderror" id="date_of_birth" name="date_of_birth">
                    @error('date_of_birth')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <label for="gender">Genero:</label>
                <div>
                    <input type="text" class="@error('gender') @enderror" id="gender" name="gender">
                    @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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