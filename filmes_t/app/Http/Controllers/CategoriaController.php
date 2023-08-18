<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{

    public function create()
    {
        return view('nova');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
        ]);

        // Verificar se a categoria já existe
        $existingCategoria = Categoria::where('nome', $data['nome'])->first();
        if ($existingCategoria) {
            return redirect()->route('categorias.create')->with('error', 'A categoria já existe.');
        }

        Categoria::create($data);

        return redirect()->route('categorias.create')->with('success', 'Categoria registrada com sucesso!');
    }
}
