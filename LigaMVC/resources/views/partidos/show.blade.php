@extends('layouts.plantilla')

@section('title', 'Partido'. $partido->id)
@section('content')
    <h1>Partido {{$partido->id}}</h1>
    <a href="{{route('partidos.index')}}">Volver a Partidos</a>
    <br>
    <a href="{{route('partidos.edit', $partido)}}">Editar partido</a>
    <p><strong>Equipo Local: </strong>{{ $partido->equipoLocal->name }}</p>
    <p><strong>Goles: </strong>{{ $partido->goles_local }}</p>
    <p><strong>Equipo Visitante: </strong>{{ $partido->equipoVisitante->name }}</p>
    <p><strong>Goles: </strong>{{ $partido->goles_visitante }}</p>
@endsection