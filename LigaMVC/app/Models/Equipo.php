<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'partidos_jugados', 'partidos_ganados', 'partidos_empatados', 'partidos_perdidos', 'goles_realizados', 'goles_recibidos', 'puntos'];  //propiedades permitidas para asignacion masiva
    protected $guarded = [];  //las propiedades que no quiero se asignen masivamente
    
    public function partidosComoLocal()
    {
        return $this->hasMany(Partido::class, 'equipo_local');
    }

    public function partidosComoVisitante()
    {
        return $this->hasMany(Partido::class, 'equipo_visitante');
    }

    public function calcularEstadisticas()
    {
        $partidosJugados = $this->partidosComoLocal->count() + $this->partidosComoVisitante->count();
        
        $partidosGanados = $this->partidosComoLocal->filter(function ($partido) {
            return $partido->goles_local > $partido->goles_visitante;
        })->count() + $this->partidosComoVisitante->filter(function ($partido) {
            return $partido->goles_visitante > $partido->goles_local;
        })->count();
        
        $partidosEmpatados = $this->partidosComoLocal->filter(function ($partido) {
            return $partido->goles_local === $partido->goles_visitante;
        })->count() + $this->partidosComoVisitante->filter(function ($partido) {
            return $partido->goles_local === $partido->goles_visitante;
        })->count();

        $partidosPerdidos = $partidosJugados - $partidosGanados - $partidosEmpatados;

        $golesRealizados = $this->partidosComoLocal->sum('goles_local') + $this->partidosComoVisitante->sum('goles_visitante');

        $golesRecibidos = $this->partidosComoLocal->sum('goles_visitante') + $this->partidosComoVisitante->sum('goles_local');

        $puntos = ($partidosGanados * 3) + $partidosEmpatados;

        $this->update([
            'partidos_jugados' => $partidosJugados,
            'partidos_ganados' => $partidosGanados,
            'partidos_empatados' => $partidosEmpatados,
            'partidos_perdidos' => $partidosPerdidos,
            'goles_realizados' => $golesRealizados,
            'goles_recibidos' => $golesRecibidos,
            'puntos' => $puntos,
        ]);
    }

}
