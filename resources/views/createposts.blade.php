@extends('layouts.main')

@section('title', "New Post")

@section('content')
    <div>
        <form action="{{ route('post.create') }}" method="POST">
            @csrf
            <div>
                <select name="post" id="post">
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}"> {{ $usuario->nombre }} </option>
                    @endforeach
                </select>

                <div>
                    <label>Temas:</label>
                    <div>
                    <input type="checkbox" id="viajes" name="viajes" value="viajes">
                    <label for="viajes"> Viajes </label><br>
                    <input type="checkbox" id="deportes" name="deportes" value="deportes">
                    <label for="deportes"> Deportes </label><br>
                    <input type="checkbox" id="trabajos" name="trabajos" value="trabajos">
                    <label for="trabajos"> Trabajos </label><br>
                    <input type="checkbox" id="politica" name="politica" value="politica">
                    <label for="politica">Politica</label><br><br>
                    </div>
                </div>

                <div>
                    <label for="titulo">Title:</label>
                    <div>
                        <input type="text" id="title" name="title">
                    </div>
                </div>

                <div>
                    <label for="text">Text:</label>
                    <div>
                        <textarea id="text" name="text"></textarea>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit">Add Post</button>
            </div>
        </form>
    </div>
@endsection