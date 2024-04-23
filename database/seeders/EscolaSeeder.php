<?php

namespace Database\Seeders;

use App\Models\Escola;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EscolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Escola::factory()->count(10)->create();
    }
}
