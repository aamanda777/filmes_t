@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-cover bg-red-500">
    <div class="flex flex-col w-full max-w-5xl p-10 bg-black bg-opacity-90 rounded-3xl shadow-5xl">
        <h2 class="text-4xl text-red-600 uppercase mb-6 text-center font-semibold">Registrar Novo Filme</h2>
        @if (session('success'))
            <div class="bg-green-500 text-white p-2 mb-4 rounded">{{ session('success') }}</div>
        @endif
        <form action="{{ route('filmes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4 flex">
                <label for="nome" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Nome</label>
                <input type="text" name="nome" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" required>
            </div>
            <div class="mb-4 flex">
                <label for="sinopse" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Sinopse</label>
                <textarea name="sinopse" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" required></textarea>
            </div>
            <div class="mb-4 flex">
                <label for="ano" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Ano</label>
                <input type="number" name="ano" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" required>
            </div>
            <div class="mb-4 flex">
    <label for="categoria_id" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Categoria</label>
    <select name="categoria_id" class="form-input flex-1  border-b-2 border-red-500 rounded py-2 px-3  focus:outline-none focus:border-red-800" required>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
        @endforeach
    </select>
</div>

            <div class="mb-4 flex">
                <label for="imagem" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Imagem</label>
                <input type="file" name="imagem" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" required>
            </div>
            <div class="mb-4 flex">
                <label for="trailer" class="w-1/4 text-sm font-medium text-gray-300 pr-4">Trailer URL</label>
                <input type="url" name="trailer" class="form-input flex-1 bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800" required>
            </div>
            <button type="submit" class="bg-red-600 hover:bg-red-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-red">Registrar</button>
            <a href="{{ route('dashboard') }}" class="block mt-4 text-gray-300 hover:text-white">
    <i class="fas fa-arrow-left text-white mr-2"></i>Voltar
</a>
        </form>
    </div>
</div>
@endsection