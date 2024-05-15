<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 0,
            'title' => 'Bapakku Paawang Ruok',
            'urlMedia' => 'https://cdn1-production-images-kly.akamaized.net/n6s1swbjSzUjY_0cztE3UBH-0Cg=/1280x720/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3632858/original/022267400_1636950532-3_fakta_menarik_film_Jumanji_-_Welcome_to_the_Jungle.jpg'
        ]);
                MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 1,
            'title' => 'film apa',
            'urlMedia' => 'https://www.youtube.com/embed/TmpTDQ6g1KM?si=hXwYZTd_O2Rs7oDd',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 0,
            'title' => 'miami',
            'urlMedia' => 'https://awsimages.detik.net.id/community/media/visual/2019/12/06/950d5e6a-030f-4aa0-aae7-8834a70365c8_169.jpeg?w=1200',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 1,
            'title' => 'media A',
            'urlMedia' => 'https://www.youtube.com/embed/2QKg5SZ_35I?si=QxmzLpDbwXD8uoga',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 0,
            'title' => 'media B',
            'urlMedia' => 'https://images.bisnis.com/posts/2020/05/18/1242084/images-16_copy_800x500.jpeg',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'tipeMedia' => 1,
            'title' => 'media C',
            'urlMedia' => 'https://www.youtube.com/embed/II7GNZ-zS-U?si=bHHX51hWLcP9nWGY',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 1,
            'title' => 'media D',
            'urlMedia' => 'https://www.jurnas.com/images/posts/1/2023/2023-10-18/8bd8b81b3433a483458e25ad51c10ae0_1.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 0,
            'title' => 'Belajar LUA',
            'urlMedia' => 'https://www.youtube.com/embed/iYrY2Y0EAlU?si=VOgFKW5uvTayqjhd'
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 1,
            'title' => 'media E',
            'urlMedia' => 'https://o-cdn-cas.sirclocdn.com/parenting/images/Spider-Man-_Across_the_Spider-V.width-800.jpegquality-80.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 0,
            'title' => 'media F',
            'urlMedia' => 'https://www.youtube.com/embed/watch?v=0p64GBZDHwE',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 1,
            'title' => 'media G',
            'urlMedia' => 'https://www.youtube.com/embed/watch?v=WrtoAkI9mRg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'tipeMedia' => 0,
            'title' => 'media H',
            'urlMedia' => 'https://www.youtube.com/embed/watch?v=grFElvr5Nrs&t=80s',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 1,
            'title' => 'media I',
            'urlMedia' => 'https://www.youtube.com/watch?v=wmwOv3qR4VA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 0,
            'title' => 'media J',
            'urlMedia' => 'https://www.youtube.com/watch?v=nmqe9XQuUcA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 2,
            'title' => 'media K',
            'urlMedia' => 'https://www.youtube.com/watch?v=0szpRuVjIGU',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 0,
            'title' => 'media L',
            'urlMedia' => 'https://www.youtube.com/watch?v=eR0rAhutERg',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'tipeMedia' => 1,
            'title' => 'media M',
            'urlMedia' => 'https://www.youtube.com/watch?v=Xu6M236qX6g',
        ]);
    }
}
