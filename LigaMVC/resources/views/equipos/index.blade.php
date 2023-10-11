@extends('layouts.plantilla')

@section('title', 'Indice equipos')
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
    <ul class="list-disc list-inside">
        @foreach ($equipos as $equipo)
            <li>
                <a href="{{route('equipos.show', $equipo->id)}}">{{$equipo->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$equipos->links()}}
@endsection