@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-red-600">
    <div class="flex flex-col p-8 rounded-lg shadow-lg w-4/5 mx-auto bg-black bg-opacity-90 md:flex-row">
        <div class="w-full md:w-2/3">
            <h1 class="text-4xl uppercase text-center p-9 font-bold mb-8 text-red-700 mt-6">Faça seu login</h1>

            @if(session('mensagem'))
                <p class="text-red-500 mb-4">{{ session('mensagem') }}</p>
            @endif
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="mb-4 flex items-center">
                    <label for="email" class="w-1/4 text-white pr-4">E-mail:</label>
                    <input type="email" id="email" name="email" required class="form-input bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800 flex-1">
                </div>
                <div class="mb-4 flex items-center">
                    <label for="senha" class="w-1/4 text-white pr-4">Senha:</label>
                    <input type="password" id="senha" name="password" required class="form-input bg-transparent border-b-2 border-red-500 rounded py-2 px-3 text-white focus:outline-none focus:border-red-800 flex-1">
                </div>
                <button type="submit" class="uppercase mt-4 bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-lg w-full mb-4">Entrar</button>
            </form>

            <p class="text-white text-center mt-4">Não tem uma conta? <a href="{{ route('registro') }}" class="text-red-500 font-bold hover:underline">Crie uma aqui</a>.</p>
        </div>

        <div class="w-full md:w-1/2 p-8 flex items-center justify-center">
            <img src="{{ asset('images/popcorn.png') }}" class="h-full">
        </div>
    </div>
</div>
@endsection
