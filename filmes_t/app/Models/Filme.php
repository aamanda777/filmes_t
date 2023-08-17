<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = ['nome', 'sinopse', 'ano', 'categoria', 'imagem_capa', 'trailer'];
}
