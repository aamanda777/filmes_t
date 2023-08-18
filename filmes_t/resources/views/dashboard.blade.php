@extends('layouts.app')

@section('content')
@include('navbar')
<div class="bg-cover bg-center h-screen flex items-center justify-center bg-black">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-red-600 up mb-4">BEM-VINDO À FILMOTECA</h1>
        <p class="text-xl text-gray-300 mb-8">Seu destino para explorar filmes incríveis.</p>
        <a href="{{ route('filmes.listagem') }}" class="inline-block bg-red-600 hover:bg-red-500 text-white py-3 px-8 rounded-lg text-lg font-semibold transition duration-300 ease-in-out">Explorar Filmes</a>
    </div>
</div>
@endsection
