<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filme'; // Especifica o nome da tabela
    protected $fillable = ['nome', 'sinopse', 'ano', 'categoria_id', 'imagem_capa', 'link_trailer'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}

