<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->unique();
            $table->string('isbn');
            $table->text('deskripsi');
            $table->integer('jml_halaman');
            $table->string('cover');
            $table->date('tgl_terbit');
            $table->foreignId('id_penulus')->noDelete('cascade');
            $table->timestamps();
        });

        //membuat table privat(tabel bantu)
        Schema::create('genre_buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_buku')->onDelete('cascade');
            $table->foreignId('id_penulis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
        Schema::dropIfExists('genre_buku');
    }
}
