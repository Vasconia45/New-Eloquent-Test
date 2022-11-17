@extends('layouts.main')

@section('title', "New Direccion")

@section('content')
    @if(session('successful_message'))
        {{ session('successful_message') }}
    @endif
    <div>
        <form action="{{ route('direccion.create') }}" method="POST">
        @csrf
            <div>
                <label for="calle">Calle:</label>
                <div>
                    <input type="text" id="calle" name="calle">
                </div>
            </div>

            <div>
                <label for="numero">Numero:</label>
                <div>
                    <input type="text" id="numero" name="numero">
                </div>
            </div>

            <div>
                <label for="postal">Codigo Postal:</label>
                <div>
                    <input type="text" id="postal" name="postal">
                </div>
            </div>

            <div>
                <label for="municipio">Municipio:</label>
                <div>
                    <input type="text" id="municipio" name="municipio">
                </div>
            </div>

            <div>
                <button type="submit">Add Direccion</button>
            </div>
        </form>
    </div>
@endsection