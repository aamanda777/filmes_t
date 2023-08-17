@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Filme</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('filmes.update', $filme->id) }}" method="POST">
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
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" class="form-control" value="{{ $filme->categoria }}" required>
            </div>
            <div class="form-group">
                <label for="trailer">Trailer URL:</label>
                <input type="url" name="trailer" class="form-control" value="{{ $filme->trailer }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection
