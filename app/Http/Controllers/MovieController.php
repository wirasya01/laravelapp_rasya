<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremovieRequest;
use App\Http\Requests\UpdatemovieRequest;
use App\Models\movie;

class MovieController extends Controller
{
    public function getMovie() {
        //melihat semua data
        $movies = Movie::all();
        //dump data atau melihat isi data diri sebuah variable
        //pasing data movie ke view 'movie.index'
        return view('movie/index', compact('movies'));
    }

    public function getMovieById($id) {
        $movie = Movie::findOrFail($id);
        return view('movie.show', compact('movie'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremovieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemovieRequest  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemovieRequest $request, movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $movie)
    {
        //
    }
}
