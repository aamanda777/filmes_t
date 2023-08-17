<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CadastrosSeeder extends Seeder
{
    public function run()
    {
        DB::table('cadastros')->insert([
            ['nome' => 'Administrador', 'password' => bcrypt('amanda'), 'cargo' => 'administrador'],
        ]);
    }
}

