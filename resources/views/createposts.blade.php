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