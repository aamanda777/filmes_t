<?php

// app/Models/Cadastro.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cadastro extends Authenticatable
{
    protected $fillable = [
        'nome', 'email', 'password', 'cargo',
    ];
    


    protected $hidden = [
        'password', 'remember_token',
    ];
}
