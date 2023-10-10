@extends('layouts.plantilla')

@section('title', 'Equipo edit')
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
@endsection