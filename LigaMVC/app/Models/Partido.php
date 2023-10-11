<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
    protected $fillable = ['equipo_local', 'equipo_visitante', 'goles_local', 'goles_visitante'];

    public function equipoLocal()
    {
        return $this->belongsTo(Equipo::class, 'equipo_local');
    }

    public function equipoVisitante()
    {
        return $this->belongsTo(Equipo::class, 'equipo_visitante');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($partido) {
            $partido->equipoLocal->calcularEstadisticas();
            $partido->equipoVisitante->calcularEstadisticas();
        });

        static::updated(function ($partido) {
            $partido->equipoLocal->calcularEstadisticas();
            $partido->equipoVisitante->calcularEstadisticas();
        });

        static::deleted(function ($partido) {
            $partido->equipoLocal->calcularEstadisticas();
            $partido->equipoVisitante->calcularEstadisticas();
        });
    }
}
