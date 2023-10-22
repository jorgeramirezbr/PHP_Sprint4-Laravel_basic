@extends('adminlte::page')

@section('title', 'Indice equipos')

@section('content_header')
    @vite('resources/css/app.css')
    <h1>Indice de equipos de la LigaMVC</h1>
@stop

@section('content')
    <div>
        <div class="flex justify-center">
            <p class="my-8">
                <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="{{route('home')}}">Inicio</a>
            </p>
            <p class="my-8">
                <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="{{route('equipos.create')}}">Crear equipo</a>
            </p>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Equipo</th>
                            <th>Puntos</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equipos as $equipo)
                            <tr>
                                <td>{{$equipo->id}}</td>
                                <td><a class= " text-blue-600" href="{{route('equipos.show', $equipo->id)}}">{{$equipo->name}}</a></td>
                                <td>{{$equipo->puntos}}</td>
                                <td width="10px">
                                    <a href="{{route('equipos.edit', $equipo)}}" class="btn btn-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$equipos->links()}}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireScripts
@stop