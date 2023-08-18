@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-cover bg-red-500">
    <div class="flex flex-col w-full max-w-5xl p-10 bg-black bg-opacity-90 rounded-3xl shadow-5xl">
        <h2 class="text-4xl text-red-600 uppercase mb-6 text-center font-semibold">Editar Filme</h2>
        <form action="{{ route('filmes.update', $filme->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4 flex">
                <label for="nome" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Nome</label>
                <input type="text" name="nome" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" value="{{ $filme->nome }}" required>
            </div>
            <div class="mb-4 flex">
                <label for="sinopse" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Sinopse</label>
                <textarea name="sinopse" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" required>{{ $filme->sinopse }}</textarea>
            </div>
            <div class="mb-4 flex">
                <label for="ano" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Ano</label>
                <input type="number" name="ano" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" value="{{ $filme->ano }}" required>
            </div>
            <div class="mb-4 flex">
                <label for="categoria_id" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Categoria</label>
                <select name="categoria_id" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $filme->categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4 flex">
                <label for="trailer" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Trailer URL</label>
                <input type="url" name="trailer" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" value="{{ $filme->link_trailer }}" required>
            </div>
            <div class="mb-4 flex">
                <label for="imagem" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Imagem</label>
                <input type="file" name="imagem" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800">
            </div>
            <button type="submit" class="bg-red-600 hover:bg-red-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-red">Salvar Alterações</button>
        </form>
    </div>
@endsection
