<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmeSeeder extends Seeder
{
    public function run()
    {
        DB::table('filme')->insert([
            [
                'nome' => 'Barbie',
                'sinopse' => 'Depois de ser expulsa da Barbieland por ser uma boneca de aparência menos do que perfeita, Barbie parte para o mundo humano em busca da verdadeira felicidade.',
                'ano' => 2023,
                'categoria_id' => 2, 
                'imagem_capa' => 'uploads/barbie.webp', 
                'link_trailer' => 'https://www.youtube.com/watch?v=Ujs1Ud7k49M&ab_channel=WarnerBros.PicturesBrasil', 
            ],
            [
                'nome' => 'FormiguinhaZ',
                'sinopse' => 'Z é uma formiga operária que tenta conciliar sua individualidade com a ética do trabalho comunitário do formigueiro. Ele conhece e se apaixona pela princesa Bala, a herdeira do formigueiro, e arma um plano para reencontrá-la. Porém o maligno General Mandíbula ameaça exterminar toda a população trabalhadora e cabe a Z salvar a colônia de formigas das conspirações traiçoeiras de Mandíbula.',
                'ano' => 1998,
                'categoria_id' => 4, 
                'imagem_capa' => 'uploads/formiguinhas.jpeg', 
                'link_trailer' => 'https://www.youtube.com/watch?v=jifHAURSi78&ab_channel=ORTIZJUNIOR', 
            ],
            [
                'nome' => 'Veronica',
                'sinopse' => 'Verônica tenta conversar com o espírito de seu pai usando um tabuleiro ouija. Mas as coisas não saem como o esperado e a garota começa a ser perseguida por uma entidade maligna.',
                'ano' => 2017,
                'categoria_id' => 7, 
                'imagem_capa' => 'uploads/veronica.jpeg', 
                'link_trailer' => 'https://www.youtube.com/watch?v=s-PdfZ9a6oI&ab_channel=MHD-MagazineHD', 
            ],
            [
                'nome' => 'Belo Desastre',
                'sinopse' => 'Abby é uma caloura certinha que vai a uma luta clandestina com seus amigos da faculdade. Lá, ela conhece Travis, um lutador que está decidido a conquistar a moça. Apesar de se sentir atraída por ele, Abby fica cansada das suas investidas. Durante uma luta, os dois fazem uma aposta: se Travis ganhar, os dois vão morar juntos por um mês.',
                'ano' => 2023,
                'categoria_id' => 5, 
                'imagem_capa' => 'uploads/belo.jpeg', 
                'link_trailer' => 'https://www.youtube.com/watch?v=Vv30NI4U5UU&ab_channel=PrimeVideoBrasil', 
            ],
            
        ]);
    }
}
