<?php

namespace Database\Factories;
use App\Models\Equipo;
use App\Models\Partido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partido>
 */
class PartidoFactory extends Factory
{
    protected $model = Partido::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $equipoLocalId = Equipo::inRandomOrder()->value('id');
        $equipoVisitanteId = Equipo::inRandomOrder()->where('id', '!=', $equipoLocalId)->value('id');
        
        return [
            'equipo_local' => $equipoLocalId,
            'equipo_visitante' => $equipoVisitanteId,
            'goles_local' => $this->faker->numberBetween(0, 5),
            'goles_visitante' => $this->faker->numberBetween(0, 5),
        ];
    }
}
