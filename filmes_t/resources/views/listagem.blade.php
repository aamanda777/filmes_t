@extends('layouts.app')

@section('content')
@include('navbar')
<div class="py-8">
    <h2 class="text-3xl mb-6 text-center">FILMES DISPONÍVEIS</h2>

    <div class="flex justify-center space-x-4 mb-8">
    <form action="{{ route('filmes.listagem') }}" method="GET" class="flex items-center space-x-4">
        <label for="ano" class="text-lg font-semibold text-gray-700">Filtrar por Ano:</label>
        <select name="ano" id="ano" class="border rounded-lg px-3 py-1 focus:outline-none focus:ring focus:border-blue-300">
            <option value="">Todos</option>
            @foreach ($anos as $ano)
                <option value="{{ $ano }}"{{ request('ano') == $ano ? ' selected' : '' }}>{{ $ano }}</option>
            @endforeach
        </select>

        <label for="categoria" class="text-lg font-semibold text-gray-700">Filtrar por Categoria:</label>
        <select name="categoria" id="categoria" class="border rounded-lg px-3 py-1 focus:outline-none focus:ring focus:border-blue-300">
            <option value="">Todas</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}"{{ request('categoria') == $categoria->id ? ' selected' : '' }}>{{ $categoria->nome }}</option>
            @endforeach
        </select>

        <button type="submit" class="bg-red-900 hover:bg-red-400 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-red">
            Filtrar
        </button>
    </form>
</div>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach ($filmes as $filme)
            <div class="bg-white shadow-lg border-gray-100 rounded-3xl p-4 flex flex-col space-y-4 h-full">
                <a href="{{ route('filmes.detalhes', $filme->id) }}">
                    <img class="h-72 w-full object-cover rounded-lg shadow-lg" src="{{ asset('storage/' . $filme->imagem_capa) }}" alt="{{ $filme->nome }}">
                </a>
                <div class="flex justify-between items-start">
                    <h2 class="text-lg font-semibold">{{ $filme->nome }}</h2>
                    <div class="bg-yellow-400 font-bold rounded-xl p-2">{{ $filme->ano }}</div>
                </div>
                @auth
                    @if (auth()->user()->cargo === 'administrador')
                        <div class="flex justify-end">
                            <a href="{{ route('filmes.edit', $filme->id) }}" class="text-blue-500 hover:text-blue-600 mr-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('filmes.destroy', $filme->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
</div>
@endsection
