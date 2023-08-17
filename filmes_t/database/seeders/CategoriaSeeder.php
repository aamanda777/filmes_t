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
            ['nome' => 'Ficção Científica'],
        ]);
    }
}

