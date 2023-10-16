@extends('adminlte::page')

@section('title', 'Indice equipos')

@section('content_header')
    <h1>Indice equipos</h1>
@stop

@section('content')
    <h1>Pagina principal de Equipos</h1>
    <div class="flex justify-center">
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="{{route('home')}}">Inicio</a>
        </p>
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="{{route('equipos.create')}}">Crear equipo</a>
        </p>
    </div>
    <ol class="list-disc list-inside">
        @foreach ($equipos as $equipo)
            <li>
                <a href="{{route('equipos.show', $equipo->id)}}">{{$equipo->name}}</a>
                {{$equipo->puntos}} puntos
            </li>
        @endforeach
    </ol>
    {{$equipos->links()}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.tailwindcss.com"></script>
@stop