@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h2 class="text-2xl mb-4">{{ $filme->nome }}</h2>
        <div class="border border-gray-200 p-4 mb-4">
<a href="{{ $filme->trailer }}" target="_blank">
    <img src="{{ asset('storage/'. $filme->imagem_capa) }}" alt="{{ $filme->nome }}" class="mb-2">
</a>

            <p>Sinopse: {{ $filme->sinopse }}</p>
            <p>Ano: {{ $filme->ano }}</p>
            <div class="form-group">
    <label for="categoria">Categoria:</label>
    <p>{{ $filme->categoria->nome }}</p>
</div>

            <a href="{{ urldecode($filme->link_trailer) }}" target="_blank" class="text-blue-500">Assistir Trailer</a>
        </div>
    </div>
@endsection
