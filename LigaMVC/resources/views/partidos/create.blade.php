@extends('layouts.plantilla')

@section('title', 'Crear partido')
@section('content')
    <h1>Registro de un nuevo partido de la Liga MVC</h1>
    <form action="{{route('partidos.store')}}" method="post">
        @csrf
        <label>Equipo local: </label>
        <select name="equipo_local">
            <option value="">Seleccionar un equipo</option>
            @foreach ($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->name }}</option>
            @endforeach
        </select>
        <br>
        <label>Goles Equipo Local:</label>
        <input type="number" name="goles_local" value="0" min="0">
        <br>
        <label>Equipo Visitante:</label>
        <select name="equipo_visitante">
            <option value="">Seleccionar un equipo</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->name }}</option>
            @endforeach
        </select>
        <br>
        <label>Goles Equipo Visitante:</label>
        <input type="number" name="goles_visitante" value="0" min="0">
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection