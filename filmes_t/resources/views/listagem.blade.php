@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h2 class="text-2xl mb-4">Listagem de Filmes</h2>

        @foreach ($filmes as $filme)
            <div class="border border-gray-200 p-4 mb-4">
                <h3 class="text-lg">{{ $filme->nome }}</h3>
                <a href="{{ route('filmes.detalhes', $filme->id) }}">
                    <img src="{{ asset('storage/' . $filme->imagem_capa) }}" alt="{{ $filme->nome }}" class="mb-2">
                </a>
                @auth
                    @if (auth()->user()->cargo === 'administrador')
                        <div class="flex space-x-2 mt-4">
                            <a href="{{ route('filmes.edit', $filme->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('filmes.destroy', $filme->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
@endsection
