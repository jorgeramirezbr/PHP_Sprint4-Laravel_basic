@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    @vite('resources/css/app.css')
    <h1 class="">Inicio</h1>
@stop

@section('content')
    <div class="flex justify-center">
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="equipos">Ver equipos</a>
        </p>
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="partidos">Ver partidos</a>
        </p>
    </div>
    <table class="table-auto mx-auto border-separate">
        <thead class="text-blue-800 text-center">
            <tr>
                <th class="border border-gray-400 px4 py2">Pos.</th>
                <th class="border border-gray-400 px4 py2">Equipo</th>
                <th class="border border-gray-400 px4 py2">Partidos<br> jugados</th>
                <th class="border border-gray-400 px4 py2">Partidos<br> ganados</th>
                <th class="border border-gray-400 px4 py2">Partidos<br> empatados</th>
                <th class="border border-gray-400 px4 py2">Partidos<br> perdidos</th>
                <th class="border border-gray-400 px4 py2">Goles<br> realizados</th>
                <th class="border border-gray-400 px4 py2">Goles<br> recibidos</th>
                <th class="border border-gray-400 px4 py2">Puntos</th>
            </tr>
        </thead>
        <tbody>
            @php
                $posicion = ($equipos->currentPage() - 1) * $equipos->perPage() + 1; // Calcula la posición inicial
            @endphp
            @foreach ($equipos as $equipo)
                <tr>
                    <td class="border border-gray-400 px4 py2">{{ $posicion++ }}</td>
                    <td class="border border-gray-400 px4 py2 text-blue-600"><a href="{{route('equipos.show', $equipo->id)}}">{{$equipo->name}}</a></td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->partidos_jugados}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->partidos_ganados}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->partidos_empatados}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->partidos_perdidos}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->goles_realizados}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->goles_recibidos}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->puntos}}</td>                              
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$equipos->links()}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.tailwindcss.com"></script>
@stop

