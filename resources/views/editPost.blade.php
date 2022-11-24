@extends('layouts.main')

@section('title', "Post")

@section('content')
    <div>
        <form action="{{ route('post.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Titulo:</label>
                <div>
                    <input type="text" id="title" name="title" value="{{ $post->titulo }}">
                </div>
            </div>
            <div>
                <label for="text">Texto:</label>
                <div>
                    <textarea id="text" name="text"> {{ $post->texto }} </textarea>
                </div>
            </div>
            <div>
                <button type="submit">Edit</button>
            </div>
        </form>
    </div>
@endsection