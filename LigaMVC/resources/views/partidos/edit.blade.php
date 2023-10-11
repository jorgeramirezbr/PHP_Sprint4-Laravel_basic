@extends('layouts.plantilla')

@section('title', 'Editar partido')
@section('content')
    <h1>Editar un partido de la Liga MVC</h1>
    <form action="{{route('partidos.update', $partido)}}" method="post">
        @csrf
        @method('put')
        <label>Equipo local: </label>
        <select name="equipo_local">
            {{-- <option value="{{ $partido->id }}">{{$partido->equipoLocal->name}}</option> --}}
            @foreach ($equipos as $equipo)
                <option value="{{ $equipo->id }}" {{ ($partido->equipoLocal && $partido->equipoLocal->id == $equipo->id) ? 'selected' : '' }}>{{ $equipo->name }}</option>
            @endforeach
        </select>
        <br>
        <label>Goles Equipo Local:</label>
        <input type="number" name="goles_local" value="{{ $partido->goles_local }}" min="0">
        <br>
        <label>Equipo Visitante:</label>
        <select name="equipo_visitante">
            {{-- <option value="{{ $partido->id }}">{{$partido->equipoVisitante->name}}</option> --}}
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" {{ ($partido->equipoVisitante && $partido->equipoVisitante->id == $equipo->id) ? 'selected' : '' }}>{{ $equipo->name }}</option>
            @endforeach
        </select>
        <br>
        <label>Goles Equipo Visitante:</label>
        <input type="number" name="goles_visitante" value="{{ $partido->goles_visitante }}" min="0">
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection