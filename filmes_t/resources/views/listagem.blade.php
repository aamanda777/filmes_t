@extends('layouts.app')

@section('content')
<div class="py-4">
    <h2 class="text-2xl mb-4">Listagem de Filmes</h2>

    <div class="grid grid-cols-2 gap-4">
        @foreach ($filmes as $filme)
            <div class="bg-black bg-opacity-95 rounded-lg shadow-lg text-white p-4">
                <a href="{{ route('filmes.detalhes', $filme->id) }}">
                    <img src="{{ asset('storage/' . $filme->imagem_capa) }}" alt="{{ $filme->nome }}" class="mb-2 rounded-lg">
                </a>
                <h3 class="text-lg">{{ $filme->nome }}</h3>
                @auth
                    @if (auth()->user()->cargo === 'administrador')
                        <div class="flex mt-2">
                            <a href="{{ route('filmes.edit', $filme->id) }}" class="mr-2">
                                <i class="fas fa-edit text-white"></i>
                            </a>
                            <form action="{{ route('filmes.destroy', $filme->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fas fa-trash text-white"></i>
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
