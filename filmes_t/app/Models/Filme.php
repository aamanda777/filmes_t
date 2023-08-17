<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = ['nome', 'sinopse', 'ano', 'categoria_id', 'imagem_capa', 'link_trailer'];
    protected $table = 'filme';
}
