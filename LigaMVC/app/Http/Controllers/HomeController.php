<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $equipos = Equipo::orderBy('puntos','desc')->paginate();
        return view('home', compact('equipos'));
    }
}
