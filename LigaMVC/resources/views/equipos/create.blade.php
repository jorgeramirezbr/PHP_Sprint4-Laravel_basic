@extends('layouts.plantilla')

@section('title', 'Equipo create')
@section('content')
    <h1>Ingreso de nuevo equipo a la Liga MVC</h1>
    
    
    <form action="{{route('equipos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection