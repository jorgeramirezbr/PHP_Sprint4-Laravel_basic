@extends('adminlte::page')

@section('title', 'Editar partido')

@section('content_header')
    @vite('resources/css/app.css')
    <h1>Editar partido</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{route('partidos.update', $partido)}}" method="post">
            @csrf
            @method('put')
            <br>
            <label>Equipo local: </label>
            <select name="equipo_local">
                {{-- <option value="{{ $partido->id }}">{{$partido->equipoLocal->name}}</option> --}}
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}" {{ ($partido->equipoLocal && $partido->equipoLocal->id == $equipo->id) ? 'selected' : '' }}>{{ $equipo->name }}</option>
                @endforeach
            </select>
            <br>
            @error('equipo_local')
                <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            <label>Goles Equipo Local:</label>
            <input type="number" name="goles_local" value="{{old('goles_local', $partido->goles_local)}}" min="0">
            <br><br>
            <label>Equipo Visitante:</label>
            <select name="equipo_visitante">
                {{-- <option value="{{ $partido->id }}">{{$partido->equipoVisitante->name}}</option> --}}
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id }}" {{ ($partido->equipoVisitante && $partido->equipoVisitante->id == $equipo->id) ? 'selected' : '' }}>{{ $equipo->name }}</option>
                @endforeach
            </select>
            <br>
            @error('equipo_visitante')
                <small>*{{$message}}</small>
                <br>
            @enderror
            <br>
            <label>Goles Equipo Visitante:</label>
            <input type="number" name="goles_visitante" value="{{old('goles_visitante', $partido->goles_visitante)}}" min="0">
            <br><br>
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