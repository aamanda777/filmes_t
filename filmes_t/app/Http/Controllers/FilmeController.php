<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmeController extends Controller
{
    public function index()
    {
        $filmes = Filme::all();
        return view('listagem', compact('filmes'));
    }

    public function listagem()
    {
        $filmes = Filme::all();
        return view('filmes.listagem', compact('filmes'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'sinopse' => 'required|string',
            'ano' => 'required|integer',
            'categoria' => 'required|integer',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif',
            'trailer' => 'required|url',
        ]);

        $imagemPath = $data['imagem']->store('uploads', 'public');

        Filme::create([
            'nome' => $data['nome'],
            'sinopse' => $data['sinopse'],
            'ano' => $data['ano'],
            'categoria_id' => $data['categoria'],
            'imagem' => $imagemPath,
            'link_trailer' => $data['trailer'],
        ]);

        return redirect()->route('filmes.listagem')->with('success', 'Filme registrado com sucesso!');
    }

    public function edit($id)
    {
        $filme = Filme::findOrFail($id);
        return view('filmes.edit', compact('filme'));
    }

    public function update(Request $request, $id)
    {
        $filme = Filme::findOrFail($id);

        $data = $request->validate([
            'nome' => 'required|string',
            'sinopse' => 'required|string',
            'ano' => 'required|integer',
            'categoria' => 'required|string',
            'trailer' => 'required|url',
        ]);

        $filme->update($data);

        return redirect()->route('filmes.listagem')->with('success', 'Filme atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();

        return redirect()->route('filmes.listagem')->with('success', 'Filme excluído com sucesso!');
    }
}
