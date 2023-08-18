<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;
use App\Models\Categoria;

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
        return view('listagem', compact('filmes'));
    }

    public function create()
    {
        $categorias = Categoria::all(); // Obtenha todas as categorias
        return view('create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'sinopse' => 'required|string',
            'ano' => 'required|integer',
            'categoria_id' => 'required|integer',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif',
            'trailer' => 'required|url',
        ]);
        

        $imagemPath = $data['imagem']->store('uploads', 'public');

        Filme::create([
            'nome' => $data['nome'],
            'sinopse' => $data['sinopse'],
            'ano' => $data['ano'],
            'categoria_id' => $data['categoria_id'],
            'imagem_capa' => $imagemPath,
            'link_trailer' => $data['trailer'],
        ]);

        return redirect()->route('filmes.listagem')->with('success', 'Filme registrado com sucesso!');
    }

    public function edit($id)
    {
        $filme = Filme::findOrFail($id);
        $categorias = Categoria::all(); // Obtenha todas as categorias

        return view('edit', compact('filme', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $filme = Filme::findOrFail($id);
    
        $data = $request->validate([
            'nome' => 'required|string',
            'sinopse' => 'required|string',
            'ano' => 'required|integer',
            'categoria_id' => 'required|integer',
            'trailer' => 'nullable|url', // Alterado para 'nullable|url'
        ]);
    
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('uploads', 'public');
            $data['imagem_capa'] = $imagemPath;
        }
    
        $filme->update($data);
    
        return redirect()->route('filmes.detalhes', $filme->id)->with('success', 'Filme atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();

        return redirect()->route('filmes.listagem')->with('success', 'Filme excluído com sucesso!');
    }

    public function detalhes($id)
    {
        $filme = Filme::findOrFail($id);
        $categorias = Categoria::all(); // Obtenha todas as categorias

        return view('detalhes', compact('filme', 'categorias')); // Passe as categorias para a visão
    }
}
