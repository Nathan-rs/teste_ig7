<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller {
    public function index() {
        $professores = Professor::paginate(5);
        return view('professor.show', compact('professores'));
    }

    public function create() {
        return view('professores.create');
    }

    public function store(Request $request) {

        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $professor = new Professor();
        $professor->nome = $request->input('nome');
        $professor->save();

        return redirect()->back()->with('success', 'Professor criado com sucesso.');
    }

    public function show(Professor $professor) {
        return view('professor.show', compact('professor'));
    }

    public function edit(Request $request, $id) {

        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $professor = Professor::findOrFail($id);

        $professor->nome = $request->input('nome');

        $professor->save();

        return redirect()->back()->with('success', 'Professor atualizada com sucesso.');
    }


    public function update(Request $request, Professor $professor) {
        $professor->update($request->all());
        return redirect()->route('professores.index');
    }

    public function destroy($id) {
        $professor = Professor::findOrFail($id);
        $professor->delete();
        return redirect()->back()->with('success', 'Professor deletada com sucesso.');
    }
}
