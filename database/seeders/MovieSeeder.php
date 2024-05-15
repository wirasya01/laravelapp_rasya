<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Movie::insert([
            'title' => 'Marvel Avenger Invinity war',
            'description' => 'lorem inpm dolor sit amit...',
            'coverUrl' => 'https://awsimages.detik.net.id/community/media/visual/2018/03/23/9a5c831a-4a36-41fe-af32-617845000352.jpeg?w=600&q=90',
            'trailerUrl' => 'https://www.youtube.com/embed/6ZfuNTqbHE8?si=GzB1bHM2r_rWl_C0',
            'view' => 8000
        ]);

        Movie::insert([
            'title' => 'Transformers',
            'description' => 'lorem inpm dolor sit amit...',
            'coverUrl' => 'https://upload.wikimedia.org/wikipedia/id/9/94/Transformers_Age_of_Extinction_Poster.jpeg',
            'trailerUrl' => 'https://www.youtube.com/watch?v=T9bQCAWahLk&pp=ygUmdHJhaWxlciB0cmFuc2Zvcm1lcnMgYWdlIG9mIGV4dGluY3Rpb24%3D',
            'view' => 12000
        ]);

        Movie::insert([
            'title' => 'Superman',
            'description' => 'lorem inpm dolor sit amit...',
            'coverUrl' => 'https://www.cine-mall.com/ajax/thumbs/image.php?width=351&height=532&cropratio=351:532&image=/uploads/movies/james-gunn-s-superman-legacy-2025-fan-casting-poster-296345-large2023-08-27-05-21-32.jpg',
            'trailerUrl' => 'https://www.youtube.com/watch?v=cr4_lwuP2Pw&pp=ygUXdHJhaWxlciBzdXBlcm1hbiBsZWdhY3k%3D',
            'view' => 10000
        ]);
    }
}
