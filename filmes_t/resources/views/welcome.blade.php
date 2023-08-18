<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteca</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-...P7yvr5+PnmSTSE3mk9VHw"
crossorigin="anonymous">
</head>
<body class="bg-gray-900 text-white">
    <div class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
                <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" class="w-24 h-auto">
                <span class="ml-2 text-xl font-semibold text-red-600 uppercase">Filmoteca</span>
            </a>
            <ul class="flex space-x-6">
                @if(auth()->check())
                    <li><a href="{{ route('dashboard') }}" class="hover:text-gray-300">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="hover:text-gray-300">Login</a></li>
                    <li><a href="{{ route('registro') }}" class="hover:text-gray-300">Registro</a></li>
                @endif
            </ul>
        </div>
    </div>
    
    <div class="container mx-auto mt-8 px-4">
        <h1 class="text-4xl font-semibold mb-4">Bem-vindo a Filmoteca!</h1>
        <p class="text-lg text-gray-300">
        Explore uma coleção diversificada de filmes e encontre informações detalhadas sobre cada obra cinematográfica.
            Navegue por gêneros e anos de lançamento. Aproveite para descobrir novas histórias e clássicos do cinema.
            Reúna-se com outros apaixonados por filmes, e aumente ainda mais sua paixão cinematográfica.
        </p>
        
        </div>
    </div>
</body>
</html>
