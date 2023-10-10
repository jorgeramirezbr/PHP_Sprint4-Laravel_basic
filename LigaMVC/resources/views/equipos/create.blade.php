@extends('layouts.plantilla')

@section('title', 'Crear equipo')
@section('content')
    <h1>En esta pagina podras crear un equipo</h1>
    
    
    <form action="{{route('equipos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection