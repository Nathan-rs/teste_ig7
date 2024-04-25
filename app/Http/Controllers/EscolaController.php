<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use Illuminate\Http\Request;

class EscolaController extends Controller {
    public function index() {
        $escolas = Escola::paginate(5);
        return view('escola.show', compact('escolas'));
    }

    public function create() {
        return view('escola.create');
    }

    public function store(Request $request) {

        $request->validate([
            'nome' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'inep' => 'required|numeric|min:0',
            'status' => 'required|in:ativa,inativa',
        ]);

        $escola = new Escola();
        $escola->nome = $request->input('nome');
        $escola->endereco = $request->input('endereco');
        $escola->inep = $request->input('inep');
        $escola->status = $request->input('status');
        $escola->save();

        return redirect()->back()->with('success', 'Escola criada com sucesso.');

        // return redirect()->route('escola.index');
    }

    public function show(Escola $escola) {
        return view('escola.show', compact('escola'));
    }

    public function edit($id) {
        $escola = Escola::findOrFail($id);
        return view('escola.update_escola', compact('escola'));
    }

    public function update(Request $request, Escola $escola) {
        $escola->update($request->all());
        return redirect()->route('escola.show');
    }

    public function destroy(Escola $escola) {
        $escola->delete();
        return redirect()->route('escola.index');
    }

    // $escola = Escola::findOrFail($id);

        // $escola->update([
        //     'nome' => $request->input('nome'),
        //     'endereco' => $request->input('endereco'),
        //     'inep' => $request->input('inep'),
        //     'status' => $request->input('status')
        // ]);

        // return redirect()->route('escolas.index')->with('success', 'Escola atualizada com sucesso!');
}
