@extends('adminlte::page')

@section('title', 'Equipo '. $equipo->name)

@section('content_header')
    @vite('resources/css/app.css')
    <h1>Equipo {{$equipo->id}}: {{$equipo->name}}</h1>
@stop

@section('content')
    <div class="flex justify-center">
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="{{route('equipos.index')}}">Volver a Equipos</a>
        </p>
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="{{route('equipos.edit', $equipo)}}">Editar equipo</a>
        </p>
    </div>
    <table class="table-auto mx-auto border-separate">
        <thead class="text-blue-800 text-center">
            <tr>
                <th class="border border-gray-400 px4 py2">Equipo</th>
                <th class="border border-gray-400 px4 py2">Partidos jugados</th>
                <th class="border border-gray-400 px4 py2">Partidos ganados</th>
                <th class="border border-gray-400 px4 py2">Partidos empatados</th>
                <th class="border border-gray-400 px4 py2">Partidos perdidos</th>
                <th class="border border-gray-400 px4 py2">Goles realizados</th>
                <th class="border border-gray-400 px4 py2">Goles recibidos</th>
                <th class="border border-gray-400 px4 py2">Puntos</th>
            </tr>
        </thead>
        <tbody>           
                <tr>
                    <td class="border border-gray-400 px4 py2 text-blue-600"><a href="{{route('equipos.show', $equipo->id)}}">{{$equipo->name}}</a></td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->partidos_jugados}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->partidos_ganados}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->partidos_empatados}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->partidos_perdidos}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->goles_realizados}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->goles_recibidos}}</td>
                    <td class="text-center border border-gray-400 px4 py2">{{$equipo->puntos}}</td>                              
                </tr>
        </tbody>
    </table>

    <h2 class="my-4 text-2xl font-bold text-center underline">Partidos Jugados</h2>
    <table class="table-auto mx-auto border-separate">
        <thead class="text-blue-800 text-center">
            <tr>
                <th class="border border-gray-400 px4 py2">Local</th>
                <th class="border border-gray-400 px4 py2">Goles Local</th>
                <th class="border border-gray-400 px4 py2">Visitante</th>
                <th class="border border-gray-400 px4 py2">Goles Visitante</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipo->partidosComoLocal as $partido)
                <tr>
                    <td class="text-center border border-gray-400 px4 py2">
                        <a href="{{ route('partidos.show', $partido) }}">{{ $partido->equipoLocal->name }}</a>
                    </td>
                    <td class="text-center border border-gray-400 px4 py2">{{ $partido->goles_local }}</td>
                    <td class="text-center border border-gray-400 px4 py2">
                        <a href="{{ route('partidos.show', $partido) }}">{{ $partido->equipoVisitante->name }}</a>
                    </td>
                    <td class="text-center border border-gray-400 px4 py2">{{ $partido->goles_visitante }}</td>
                </tr>
            @endforeach
            @foreach ($equipo->partidosComoVisitante as $partido)
                <tr>
                    <td class="text-center border border-gray-400 px4 py2">
                        <a href="{{ route('partidos.show', $partido) }}">{{ $partido->equipoLocal->name }}</a>
                    </td>
                    <td class="text-center border border-gray-400 px4 py2">{{ $partido->goles_local }}</td>
                    <td class="text-center border border-gray-400 px4 py2">
                        <a href="{{ route('partidos.show', $partido) }}">{{ $partido->equipoVisitante->name }}</a>
                    </td>
                    <td class="text-center border border-gray-400 px4 py2">{{ $partido->goles_visitante }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{route('equipos.destroy', $equipo)}}" method="POST">
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