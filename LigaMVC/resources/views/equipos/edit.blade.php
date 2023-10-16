@extends('adminlte::page')

@section('title', 'Editar equipo')

@section('content_header')
    <h1>Editar equipo</h1>
@stop

@section('content')
    <h1>En esta pagina podras editar un equipo</h1>
    
    
    <form action="{{route('equipos.update', $equipo)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name', $equipo->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.tailwindcss.com"></script>
@stop