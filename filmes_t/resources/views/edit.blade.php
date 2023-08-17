@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h2 class="text-2xl mb-4">Editar Filme</h2>
        <form action="{{ route('filmes.update', $filme->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $filme->nome }}" required>
            </div>
            <div class="form-group">
                <label for="sinopse">Sinopse:</label>
                <textarea name="sinopse" class="form-control" required>{{ $filme->sinopse }}</textarea>
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="number" name="ano" class="form-control" value="{{ $filme->ano }}" required>
            </div>
            <div class="form-group">
                <label for="categoria_id">Categoria:</label>
                <select name="categoria_id" class="form-control" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $filme->categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
    <label for="trailer">Trailer URL:</label>
    <input type="url" name="trailer" class="form-control" value="{{ $filme->link_trailer }}" required>
</div>

            <div class="form-group">
                <label for="imagem">Imagem:</label>
                <input type="file" name="imagem" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
@endsection
