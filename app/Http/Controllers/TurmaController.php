<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller {

    public function index() {
        $turmas = Turma::paginate(5);
        $escolas = Escola::where('status', 'ativa')->get();
        return view('turma.show', compact('turmas', 'escolas'));
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'id_escola' => 'required|integer',
            'status' => 'required|in:ativa,inativa',
            'turno' => 'required|string|max:255',
        ]);

        $turma = new Turma();
        $turma->nome = $request->input('nome');
        $turma->id_escola = $request->input('id_escola');
        $turma->status = $request->input('status');
        $turma->turno = $request->input('turno');
        $turma->save();

        return redirect()->route('turma.show')->with('success', 'Turma criada com sucesso.');
    }

    public function edit(Request $request, $id) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'id_escola' => 'required|integer',
            'status' => 'required|in:ativa,inativa',
            'turno' => 'required|string|max:255',
        ]);

        $turma = Turma::findOrFail($id);

        $turma->nome = $request->input('nome');
        $turma->id_escola = $request->input('id_escola');
        $turma->status = $request->input('status');
        $turma->turno = $request->input('turno');
        $turma->save();

        return redirect()->back()->with('success', 'Turma criada com sucesso.');
    }

    public function show(Turma $turma) {
        return view('turma.show', compact('turma'));
    }

    public function update(Request $request, Turma $turma) {
        $turma->update($request->all());
        return redirect()->route('turmas.index');
    }

    public function destroy($id) {
        $turma = Turma::findOrFail($id);
        $turma->delete();
        return redirect()->back()->with('success', 'Professor deletada com sucesso.');
    }
}
