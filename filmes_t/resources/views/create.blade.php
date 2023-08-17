@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Registrar Novo Filme</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('filmes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="sinopse">Sinopse:</label>
                <textarea name="sinopse" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="number" name="ano" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" name="categoria" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem:</label>
                <input type="file" name="imagem" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="trailer">Trailer URL:</label>
                <input type="url" name="trailer" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection
