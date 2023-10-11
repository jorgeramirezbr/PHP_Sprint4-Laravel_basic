@extends('layouts.plantilla')

@section('title', 'Partido'. $partido->id)
@section('content')
    <h1>Partido {{$partido->id}}</h1>
    <a href="{{route('partidos.index')}}">Volver a Partidos</a>
    <br>
    <a href="{{route('partidos.edit', $partido)}}">Editar partido</a>
    <p><strong>Equipo Local: </strong><a href="{{route('equipos.show', $partido->equipoLocal->id)}}">{{ $partido->equipoLocal->name }}</a></p>
    <p><strong>Goles: </strong>{{ $partido->goles_local }}</p>
    <p><strong>Equipo Visitante: </strong><a href="{{route('equipos.show', $partido->equipoVisitante->id)}}">{{ $partido->equipoVisitante->name }}</a></p>
    <p><strong>Goles: </strong>{{ $partido->goles_visitante }}</p>
    <form action="{{route('partidos.destroy', $partido)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection