<?php

namespace Database\Factories;

use App\Models\Escola;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Escola>
 */
class EscolaFactory extends Factory
{

    protected $model = Escola::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(['ativa', 'inativa']),
            'inep' => $this->faker->unique()->numerify('##########'),
            'endereco' => $this->faker->address,
            'nome' => $this->faker->company,
        ];
    }
}
