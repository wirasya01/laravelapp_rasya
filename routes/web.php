<?php

use App\Models\Film;
use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Route;
//import controller
use App\Http\Controllers\MyController;
//import movie controller
use App\Http\Controllers\MovieController;
//inport artikel
use App\Http\Controllers\ArtikelController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/siswa', function () {
    // return Siswa::all();
    return view('siswa');
});
Route::get('/sekolah', function () {
    return view('sekolah');
});
Route::get('/album', function () {
    return view('album');
});
Route::get('/film', function () {
    return view('film');
});
Route::get('/film/{id}', function (int $id) {
    $film = Film::findOrFail($id);
    return view('detailFilm', ['film' => $film]);
});
Route::get('/layout', function () {
    return view('layout/layout');
    });

//routhe with controller
Route::get('perkenalan',[MyController::class, 'introduce']);
Route::get('hewan',[MyController::class, 'animals']);

//rout movie
Route::get('movie',[MovieController::class, 'getMovie']);
Route::get('movie/{id}',[MovieController::class, 'getMovieById']);

//Rout artikel
Route::get('artikel',[ArtikelController::class, 'getArtikel']);
Route::get('artikel/id/{id}',[ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}',[ArtikelController::class, 'getArtikelKategori']);
