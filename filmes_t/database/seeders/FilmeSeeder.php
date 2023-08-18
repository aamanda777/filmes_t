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
            [
                'nome' => 'Interestelar',
                'sinopse' => 'Um grupo de exploradores viaja através de um buraco de minhoca no espaço-tempo, em uma tentativa de garantir a sobrevivência da humanidade, buscando um novo lar em planetas distantes.',
                'ano' => 2014,
                'categoria_id' => 6, 
                'imagem_capa' => 'uploads/interestelar.jpeg', 
                'link_trailer' => 'https://www.youtube.com/watch?v=3WzHXI5HizQ&ab_channel=WarnerBros.Pictures', 
            ],
            [
                'nome' => 'Pantera Negra',
                'sinopse' => 'T Challa, o rei de Wakanda, sobe ao trono na nação africana avançada tecnologicamente, mas sua reivindicação é desafiada por um estrangeiro que possui habilidades sobrenaturais.',
                'ano' => 2018,
                'categoria_id' => 1, 
                'imagem_capa' => 'uploads/pantera_negra.jpeg', 
                'link_trailer' => 'https://www.youtube.com/watch?v=xC34on1JLXI&ab_channel=MarvelEntertainment', 
            ],
            [
                'nome' => 'De Volta para o Futuro',
                'sinopse' => 'Marty McFly, um adolescente, é acidentalmente enviado 30 anos no passado em uma máquina do tempo criada por seu excêntrico cientista amigo, Doc Brown. Lá, ele conhece seus jovens pais e deve garantir que eles se apaixonem ou ele deixará de existir.',
                'ano' => 1985,
                'categoria_id' => 6, 
                'imagem_capa' => 'uploads/de_volta_para_o_futuro.jpeg', 
                'link_trailer' => 'https://www.youtube.com/watch?v=qvsgGtivCgs&ab_channel=UniversalPictures', 
            ],
            [
                'nome' => 'Toy Story',
                'sinopse' => 'Um grupo de brinquedos ganha vida quando os humanos não estão por perto. Woody, um cowboy de brinquedo, fica com ciúmes quando o novo brinquedo Buzz Lightyear se torna o favorito de seu dono.',
                'ano' => 1995,
                'categoria_id' => 4, 
                'imagem_capa' => 'uploads/toy_story.jpeg', 
                'link_trailer' => 'https://www.youtube.com/watch?v=KYz2wyBy3kc&ab_channel=Disney%2FPixar', 
            ],
            
        ]);
    }
}
