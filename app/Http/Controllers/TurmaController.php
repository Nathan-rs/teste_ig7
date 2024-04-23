<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmaController extends Controller {
    public function index() {
        $turmas = Turma::all();
        return view('turmas.index', compact('turmas'));
    }

    public function create() {
        return view('turmas.create');
    }

    public function store(Request $request) {
        Turma::create($request->all());
        return redirect()->route('turmas.index');
    }

    public function show(Turma $turma) {
        return view('turmas.show', compact('turma'));
    }

    public function edit(Turma $turma) {
        return view('turmas.edit', compact('turma'));
    }

    public function update(Request $request, Turma $turma) {
        $turma->update($request->all());
        return redirect()->route('turmas.index');
    }

    public function destroy(Turma $turma) {
        $turma->delete();
        return redirect()->route('turmas.index');
    }
}
