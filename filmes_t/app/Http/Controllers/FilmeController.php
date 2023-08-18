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

    public function listagem(Request $request)
    {
        $anos = Filme::distinct()->pluck('ano');
        $categorias = Categoria::all();
    
        $filmesQuery = Filme::query();
    
        if ($request->filled('ano')) {
            $filmesQuery->where('ano', $request->ano);
        }
    
        if ($request->filled('categoria')) {
            $filmesQuery->where('categoria_id', $request->categoria);
        }
    
        $filmes = $filmesQuery->get();
    
        return view('listagem', compact('filmes', 'anos', 'categorias'));
    }
    

    public function create()
    {
        $categorias = Categoria::all(); 
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
        $categorias = Categoria::all(); 

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
            'trailer' => 'nullable|url', 
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
        $categorias = Categoria::all(); 

        return view('detalhes', compact('filme', 'categorias')); 
    }
}
