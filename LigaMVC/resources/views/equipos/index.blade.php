@extends('layouts.plantilla')

@section('title', 'Indice equipos')
@section('content')
    <h1>Pagina principal de Equipos</h1>
    <div class="flex justify-center">
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="{{route('equipos.create')}}">Crear equipo</a>
        </p>
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="/equipos/show">Ver equipo</a>
        </p>
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="/equipos/edit">Editar equipo</a>
        </p>
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="/equipos/destroy">Borrar equipo</a>
        </p>
    </div>
    <ul class="list-disc list-inside">
        @foreach ($equipos as $equipo)
            <li>{{$equipo->name}}</li>
        @endforeach
    </ul>
    {{$equipos->links()}}
@endsection