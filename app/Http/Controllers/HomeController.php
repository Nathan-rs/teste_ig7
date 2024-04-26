<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use App\Models\Professor;
use App\Models\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $quantidadeEscolas = Escola::count();
        $quantidadeTurmas = Turma::count();
        $quantidadeProfessores = Professor::count();

        $lastTurma = DB::table('turmas')->latest()->first();

        $lastEscola = DB::table('escolas')->latest()->first();

        $lastProfessor = DB::table('professores')->latest()->first();

        return view('home.home', compact('quantidadeEscolas', 'quantidadeTurmas', 'quantidadeProfessores', 'lastTurma', 'lastEscola', 'lastProfessor'));
    }
}
