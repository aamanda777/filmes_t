<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILMES</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-black to-gray-800 text-white">
    <nav class="bg-red-800 p-4">
        <div class="flex justify-center space-x-4">
            @auth
                @if (auth()->user()->cargo === 'administrador')
                    <a href="{{ route('filmes.create') }}" class="btn">Registro de Filmes </a>
                    <a href="{{ route('filmes.listagem') }}" class="btn">Listagem de Filmes  </a>
                @else
                    <a href="{{ route('dashboard') }}" class="btn">Listagem de Filmes</a>
                @endif
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn">Sair</button>
                </form>
            @endauth
        </div>
    </nav>

    <div class="flex items-center justify-center h-screen">
        <div class="text-center">
            <h1 class="text-8xl font-bold text-red-600 mb-6">SITE DE FILMES</h1>
        </div>
    </div>
</body>
</html>
