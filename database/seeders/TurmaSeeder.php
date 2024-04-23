<?php

namespace Database\Seeders;

use App\Models\Escola;
use App\Models\Turma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $escolas = Escola::all();

        foreach ($escolas as $escola) {
            Turma::factory()->count(10)->create(['id_escola' => $escola->id]);
        }
    }
}
