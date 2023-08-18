@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-cover" style="background-image: url('{{ asset('images/aesthetic.jpg') }}');">
    <div class="flex w-full max-w-5xl p-10 bg-black bg-opacity-90 rounded-3xl shadow-2xl">
        <div class="w-1/2 pr-8 flex justify-center items-center">
            <div>
                <h2 class="text-4xl text-red-600 uppercase mb-4">{{ $filme->nome }}</h2>
                <p class="text-gray-100">{{ $filme->sinopse }}</p>
                <p class="mt-3 text-gray-200">Ano: {{ $filme->ano }}</p>
                <p class="mt-3 text-gray-200">Categoria: {{ $filme->categoria->nome }}</p>
                <a href="{{ urldecode($filme->link_trailer) }}" target="_blank" class="block mt-4 text-blue-500 hover:underline">Assistir Trailer</a>
                <a href="{{ url()->previous() }}" class="block mt-4 text-gray-300 hover:text-white">
                    <i class="fas fa-arrow-left text-white mr-2"></i>Voltar
                </a>
            </div>
        </div>
        <div class="w-1/2 flex justify-center items-center">
            <a href="{{ $filme->trailer }}" target="_blank">
                <img src="{{ asset('storage/'. $filme->imagem_capa) }}" alt="{{ $filme->nome }}" class="rounded-lg">
            </a>
        </div>
    </div>
</div>
@endsection
