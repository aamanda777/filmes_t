<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CadastrosSeeder extends Seeder
{
    public function run()
    {
        DB::table('cadastros')->insert([
            ['nome' => 'amanda', 'password' => bcrypt('123456'), 'email' => 'amanda@gmail.com', 'cargo' => 'administrador'],
            ['nome' => 'batatinha', 'password' => bcrypt('123456'), 'email' => 'batatinha@gmail.com', 'cargo' => 'usuario'],
            ['nome' => 'carecatv', 'password' => bcrypt('123456'), 'email' => 'tv@gmail.com', 'cargo' => 'usuario'],
        ]);
    }
}

