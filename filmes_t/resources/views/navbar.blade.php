<nav class="bg-gradient-to-r from-red-800 to-red-600 p-4">
    <div class="flex justify-between items-center">
        <a class="flex items-center">
            <img src="\images\logo\loguinho.png" class="h-10 mr-3" alt="Filmoteca Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">FILMOTECA</span>
        </a>
        <div class="flex items-center space-x-4">
            @auth
                @if (auth()->user()->cargo === 'administrador')
                    <a href="{{ route('categorias.create') }}" class="text-white">Registro de Categorias</a>
                    <a href="{{ route('filmes.create') }}" class="text-white">Registro de Filmes</a>
                    <a href="{{ route('filmes.listagem') }}" class="text-white">Listagem de Filmes</a>
                @else
                    <a href="{{ route('filmes.listagem') }}" class="text-white">Listagem de Filmes</a>
                @endif
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="bg-red-900 hover:bg-red-500 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline-red">Sair</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
