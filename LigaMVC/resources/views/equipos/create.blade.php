@extends('adminlte::page')

@section('title', 'Crear equipo')

@section('content_header')
    <h1>Craer equipo</h1>
@stop

@section('content')
    <h1>Ingreso de nuevo equipo a la Liga MVC</h1>
        
        
    <form action="{{route('equipos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.tailwindcss.com"></script>
@stop


@extends('layouts.plantilla')

@section('title', 'Equipo create')
@section('content')
    
@endsection