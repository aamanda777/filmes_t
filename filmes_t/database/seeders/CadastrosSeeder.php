<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CadastrosSeeder extends Seeder
{
    public function run()
    {
        DB::table('cadastros')->insert([
            ['nome' => 'user', 'password' => bcrypt('123456'), 'email' => 'user@gmail.com', 'cargo' => 'administrador'],
        ]);
    }
}

