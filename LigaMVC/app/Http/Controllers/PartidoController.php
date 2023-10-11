<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartido;
use App\Http\Requests\UpdatePartido;
use App\Models\Equipo;
use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partidos = Partido::orderBy('id','desc')->paginate();
        return view('partidos.index', compact('partidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = Equipo::all(); //incluimos los equipos para que puedan ser seleccionados en la vista create
        return view('partidos.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartido $request)
    {
        $partido = new Partido();
        $partido->equipo_local = $request->equipo_local;
        $partido->goles_local = $request->goles_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->goles_visitante = $request->goles_visitante;
        $partido->save();
        // $partido->equipoLocal->calcularEstadisticas();
        // $partido->equipoVisitante->calcularEstadisticas();
        return redirect()->route('partidos.show', $partido);
    }

    /**
     * Display the specified resource.
     */
    public function show(Partido $partido)
    {
        return view('partidos.show', compact('partido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partido $partido)
    {
        $equipos = Equipo::all();
        return view('partidos.edit', compact('partido', 'equipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartido $request, Partido $partido)
    {
        $partido->equipo_local = $request->equipo_local;
        $partido->goles_local = $request->goles_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->goles_visitante = $request->goles_visitante;
        $partido->save();
        // $partido->equipoLocal->calcularEstadisticas();
        // $partido->equipoVisitante->calcularEstadisticas();
        return redirect()->route('partidos.show', $partido);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partido $partido)
    {
        // $equipoLocal = $partido->equipoLocal;
        // $equipoVisitante = $partido->equipoVisitante;
        $partido->delete();
        // $equipoLocal->calcularEstadisticas();
        // $equipoVisitante->calcularEstadisticas();
        return redirect()->route('partidos.index');
    }
}
