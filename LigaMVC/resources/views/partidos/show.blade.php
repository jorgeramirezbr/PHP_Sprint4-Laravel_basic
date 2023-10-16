@extends('adminlte::page')

@section('title', 'Partido'. $partido->id)

@section('content_header')
    @vite('resources/css/app.css')
    <h1>Partido {{$partido->id}}</h1>
@stop

@section('content')
    <div class="flex justify-center">
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="{{route('partidos.index')}}">Volver a Partidos</a>
        </p>
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="{{route('partidos.edit', $partido)}}">Editar partido</a>
        </p>
    </div>
    <div class="container text-3xl">
        <p><strong>Equipo Local: </strong><a href="{{route('equipos.show', $partido->equipoLocal->id)}}">{{ $partido->equipoLocal->name }}</a></p>
        <p><strong>Goles: </strong>{{ $partido->goles_local }}</p>
        <p><strong>Equipo Visitante: </strong><a href="{{route('equipos.show', $partido->equipoVisitante->id)}}">{{ $partido->equipoVisitante->name }}</a></p>
        <p><strong>Goles: </strong>{{ $partido->goles_visitante }}</p>
    </div>
    <form action="{{route('partidos.destroy', $partido)}}" method="post">
        @csrf
        @method('delete')
        <button class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" type="submit">Eliminar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.tailwindcss.com"></script>
@stop
