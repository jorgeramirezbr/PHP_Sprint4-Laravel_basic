@extends('adminlte::page')

@section('title', 'Crear equipo')

@section('content_header')
    @vite('resources/css/app.css')
    <h1>Registro de nuevo equipo en la LigaMVC</h1>
@stop

@section('content')      
    <br>
    <div class="container">
        <form action="{{route('equipos.store')}}" method="POST">
            @csrf
            <label class="text-blue-800">
                Nombre:
                <input type="text" name="name" value="{{old('name')}}">
            </label>
            @error('name')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror

            <br>
            <button class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" type="submit">Enviar formulario</button>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.tailwindcss.com"></script>
@stop