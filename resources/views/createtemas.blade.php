@extends('layouts.main')

@section('title', "New Tema")

@section('content')
    <div>
        <form action="{{ route('tema.create') }}" method="POST">
            @csrf
            <div>
                <label for="nombre">Tema:</label>
                <div>
                    <input type="text" id="nombre" name="nombre">
                </div>               
            </div>

            <div>
                <button type="submit">Add Tema</button>
            </div>
        </form>

        <div>
            <table>
                <thead>Temas:</thead>
                <br>
                <tbody>
                    @each('partials.temas', $temas, 'tema', 'partials.empty')
                </tbody>
            </table>
        </div>
    </div>
@endsection