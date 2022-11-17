@extends('layouts.main')

@section('title', Asign)

@section('content')
<form action="{{ route('') }}" method="POST">
                            @csrf
                            <div>
                                <div>
                                    <select name="user" id="user">
                                        @foreach($users as $user)
                                            <option value="{{ $user->name }}"> {{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <select name="car" id="car">
                                        @foreach($cars as $car)
                                            <option value="{{ $car->plate }}">{{ $car->plate }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div>
                                <button type="submit" id="boton">Asign</button>
                            </div>
@endsection