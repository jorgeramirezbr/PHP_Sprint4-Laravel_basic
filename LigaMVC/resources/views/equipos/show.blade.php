@extends('layouts.plantilla')

@section('title', 'Equipo '. $equipo->name)
@section('content')
    <a href="{{route('equipos.index')}}">Volver a Equipos</a>
    <br>
    <a href="{{route('equipos.edit', $equipo)}}">Editar equipo</a>
    <h1><strong>El equipo: </strong>{{$equipo->name}}</h1>
    <p><strong>Puntos: </strong>{{$equipo->puntos}}</p>

    <form action="{{route('equipos.destroy', $equipo)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection