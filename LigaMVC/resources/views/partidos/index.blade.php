@extends('layouts.plantilla')

@section('title', 'Indice partidos')
@section('content')    
    <div class="flex justify-center">
        <p class="my-8">
            <a class="bg-blue-700 hover:bg-pink-700 text-white font-bold px-3 py-1 rounded m-5 text-center" href="/partidos/create">Crear partido</a>
        </p>
    </div>
    <div>
        <ul class="list-disc list-inside">
            @foreach ($partidos as $partido)
                <li>
                    {{$partido->equipoLocal->name}}: {{ $partido->goles_local }}  VS 
                    {{$partido->equipoVisitante->name}}: {{ $partido->goles_visitante }}
                </li>
            @endforeach
        </ul>
        {{$partidos->links()}}
    </div>
@endsection