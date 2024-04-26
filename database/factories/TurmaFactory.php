<?php

namespace Database\Factories;

use App\Models\Escola;
use App\Models\Turma;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turma>
 */
class TurmaFactory extends Factory
{

    protected $model = Turma::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_escola' => Escola::factory(),
            'status' => $this->faker->randomElement(['ativa', 'inativa']),
            'turno' => $this->faker->randomElement(['Manhã', 'Tarde', 'Noite']),
            'nome' => $this->faker->company,
        ];
    }
}
