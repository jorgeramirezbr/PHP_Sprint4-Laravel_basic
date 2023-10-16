@extends('adminlte::page')

@section('title', 'Crear partido')

@section('content_header')
    @vite('resources/css/app.css')
    <h1>Registro de un nuevo partido de la Liga MVC</h1>
@stop

@section('content')
    <form action="{{route('partidos.store')}}" method="post">
        @csrf
        <br>
        <label>Equipo local: </label>
        <select name="equipo_local">
            <option value="">Seleccionar un equipo</option>
            @foreach ($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->name }}</option>
            @endforeach
        </select>
        <br>
        @error('equipo_local')
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>Goles Equipo Local:</label>
        <input type="number" name="goles_local" value="0" min="0">
        <br><br>
        <label>Equipo Visitante:</label>
        <select name="equipo_visitante">
            <option value="">Seleccionar un equipo</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->name }}</option>
            @endforeach
        </select>
        <br>
        @error('equipo_visitante')
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>Goles Equipo Visitante:</label>
        <input type="number" name="goles_visitante" value="0" min="0">
        <br><br>
        <button class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" type="submit">Enviar formulario</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.tailwindcss.com"></script>
@stop