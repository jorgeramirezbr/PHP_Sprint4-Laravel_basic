@extends('layouts.plantilla')

@section('title', 'Equipo '. $equipo->name)
@section('content')
    <a href="{{route('equipos.index')}}">Volver a Equipos</a>
    <br>
    <a href="{{route('equipos.edit', $equipo)}}">Editar equipo</a>
    <h1>El equipo: {{$equipo->name}}</h1>
    <p><strong>Puntos: </strong>{{$equipo->puntos}}</p>
@endsection