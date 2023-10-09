<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('partidos/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partidos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('partidos/store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('partidos/show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('partidos/edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('partidos/update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('partidos/destroy');
    }
}
