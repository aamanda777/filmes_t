@extends('layouts.app')

@section('content')
<div class="relative min-h-screen grid bg-black">
    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0">
        <div class="relative sm:w-1/2 xl:w-3/5 bg-red-700 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden text-white bg-no-repeat bg-cover relative" style="background-image: url({{ asset('images/cineminha.png') }});">
            <div class="absolute bg-black opacity-25 inset-0 z-0"></div>
            <div class="w-full lg:max-w-2xl md:max-w-md z-10 items-center text-center">
                <div class="font-bold leading-tight mb-6 mx-auto w-full content-center items-center">
                </div>
            </div>
        </div>

        <div class="md:flex md:items-center md:justify-left w-full sm:w-auto md:h-full xl:w-1/2 p-8 md:p-10 lg:p-14 sm:rounded-lg md:rounded-none">
            <div class="max-w-xl w-full space-y-12">
                <div class="lg:text-left text-center">
                    <div class="flex items-center justify-center">
                        <div class="bg-black flex flex-col w-80 border border-red-800 rounded-lg px-8 py-10">
                        <h1 class="text-3xl uppercase text-white font-bold text-center">REGISTRE-SE</h1>
                        <form action="{{ route('registro.submit') }}" method="POST" class="flex flex-col space-y-8 mt-10">
                                @csrf
                                <label class="font-bold text-lg text-white">Nome:</label>
                                <input type="text" name="nome" id="nome" class="border rounded-lg py-3 px-3 mt-4 bg-black border-red-600 0 text-white focus:border-red-800" required>
                                <label class="font-bold text-lg text-white">Email:</label>
                                <input type="email" name="email" id="email" class="border rounded-lg py-3 px-3 mt-4 bg-black border-red-600  text-white focus:border-red-800" required>
                                <label class="font-bold text-lg text-white">Senha:</label>
                                <input type="password" name="password" id="password" class="border rounded-lg py-3 px-3 mt-4 bg-black border-red-600  text-white focus:border-red-800" required>
                                <label class="font-bold text-lg text-white">Cargo:</label>
                                <select name="cargo" id="cargo" class="border rounded-lg py-3 px-3 mt-4 bg-black border-red-600 text-white focus:border-red-800" required>
                                    <option value="usuario">Usuário</option>
                                    <option value="administrador">Administrador</option>
                                </select>
                                <button type="submit" class="uppercase mt-4 bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-lg w-full mb-4">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
