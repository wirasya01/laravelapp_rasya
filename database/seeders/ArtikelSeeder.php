<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Artikel::insert([
            'judul' => 'Manfaat Olahraga Pagi untuk Kesehatan',
            'foto' => 'https://asset.kompas.com/data/photo/2021/11/12/618e233689db2.png',
            'kategori' => 'Kesehatan',
            'konten' => 'Olahraga pagi memiliki banyak manfaat untuk kesehatan tubuh, mulai dari meningkatkan metabolisme hingga mengurangi risiko penyakit kronis. Aktivitas fisik di pagi hari juga dapat meningkatkan mood dan energi sepanjang hari.',
            'penulis' => 'Dr. Andi Nugraha'
        ]);

        Artikel::insert([
            'judul' => 'Tips Memulai Usaha Kecil di Era Digital',
            'foto' => 'https://minio.pijarmahir.id/article/7b4d672b-b699-4ff9-9bbe-f4c9fcaed9cf.jpg',
            'kategori' => 'Bisnis',
            'konten' => 'Memulai usaha kecil di era digital memerlukan strategi khusus, mulai dari pemasaran online hingga pemanfaatan media sosial. Dengan langkah yang tepat, usaha kecil dapat berkembang pesat di tengah persaingan yang ketat.',
            'penulis' => 'Siti Aisyah'
        ]);

        Artikel::insert([
            'judul' => 'Resep Masakan Tradisional Indonesia yang Lezat',
            'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpcSde-QLtLQlaj1isgMZUvUqcnk5RUDNOSEgeJh95-A&s',
            'kategori' => 'Kuliner',
            'konten' => 'Indonesia kaya akan resep masakan tradisional yang lezat dan menggugah selera. Dari rendang hingga sate, setiap daerah memiliki keunikan rasa dan cara penyajian yang khas.',
            'penulis' => 'Chef Rudi Hartono'
        ]);

        Artikel::insert([
            'judul' => 'Menjelajahi Keindahan Alam Indonesia',
            'foto' => 'https://linebank.co.id/blog/wp-content/uploads/2022/08/orchid-forest-cikole-dihadirkan-untuk-seluruh-usia-dan-juga_200914130147-237-1-768x1024.jpeg',
            'kategori' => 'kuliner',
            'konten' => 'Indonesia adalah surga bagi para pecinta alam dan petualang. Dari Sabang sampai Merauke, Indonesia menawarkan harus Anda kunjungi saat berlibur di Indonesia.',
            'penulis' => 'Andi Pratama'
        ]);
    }
}
