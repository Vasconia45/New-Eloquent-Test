@extends('layouts.main')

@section('title', "User Posts")

@section('content')
    <div>
        <div>
            <div>
                <label for="usuario">Usuario:</label>
                <b>{{ $usuario->nombre }}</b>
            </div>
        </div>
        <div>
            <table>
                <thead>Posts:</thead>
                <br>
                <tbody>
                    @each('partials.posts', $posts, 'post', 'partials.empty')
                </tbody>
            </table>
        </div>
    </div>
@endsection