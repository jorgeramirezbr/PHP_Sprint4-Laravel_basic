<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

use App\Http\Requests\StoreEquipo;

class EquipoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::orderBy('id','desc')->paginate();
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEquipo $request)
    {     
        /* $equipo = new Equipo();
        $equipo->name = $request->name;
        $equipo->save();
         */
        $equipo = Equipo::create($request->all());
        return redirect()->route('equipos.show', $equipo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        return view('equipos.show', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'name' => 'required'
        ]);
        /* $equipo->name = $request->name;
        $equipo->save(); */ 
        $equipo->update($request->all());

        return redirect()->route('equipos.show', $equipo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete();
        return redirect()->route('equipos.index');
    }
}
