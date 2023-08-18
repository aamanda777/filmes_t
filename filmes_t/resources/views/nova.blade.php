@extends('layouts.app')

@section('content')
@include('navbar')
<div class="min-h-screen flex justify-center items-center bg-red-600">
    <div class="w-full max-w-lg p-8 bg-white shadow-xl rounded-3xl">
        <h2 class="text-3xl text-red-600 font-semibold mb-6 text-center">Registrar Nova Categoria</h2>
        
        @if (session('success'))
            <div class="bg-green-500 text-white p-2 mb-4 rounded">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="bg-red-800 text-white p-2 mb-4 rounded">{{ session('error') }}</div>
        @endif

        <form action="{{ route('categorias.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="relative">
                <input type="text" name="nome" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-red-300" placeholder="Nome" required>
            </div>
            <button type="submit" class="block w-full bg-red-600 hover:bg-red-500 text-white py-2 rounded-lg focus:outline-none focus:ring focus:ring-red-300">Registrar</button>
            <a href="{{ route('dashboard') }}" class="block text-center text-gray-500 hover:text-gray-400 mt-2">
                <i class="fas fa-arrow-left text-white mr-2"></i>Voltar
            </a>
        </form>
    </div>
</div>
@endsection
