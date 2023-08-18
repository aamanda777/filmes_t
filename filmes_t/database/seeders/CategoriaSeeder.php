<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('categoria')->insert([
            ['nome' => 'Ação'],
            ['nome' => 'Comédia'],
            ['nome' => 'Drama'],
            ['nome' => 'Animação'],
            ['nome' => 'Romance'],
            ['nome' => 'Ficção Científica'],
            ['nome' => 'Terror'],
            ['nome' => 'Aventura'],
            ['nome' => 'Fantasia'],
            ['nome' => 'Suspense'],
            ['nome' => 'Documentário'],
            ['nome' => 'Musical'],
            ['nome' => 'Crime'],
            ['nome' => 'Mistério'],
        ]);
    }
}

