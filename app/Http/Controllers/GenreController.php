<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::orderBy('id', 'desc')->get();
        return view('genre.index', compact('genre'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('genre.create');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // membuat validasi data
        $validated = $request->validate([
            'nama_genre' => 'required|max:255'
        ]);

        $genre = new Genre();
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::findorFail($id);
        return view('genre.show', compact('genre'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::findorFail($id);
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenreRequest  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_genre' => 'required|max:255'
        ]);

        $genre = Genre::findOrFail($id);
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')
            ->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::findorFail($id);
        $genre->delete();
        return redirect()->route('genre.index')
            ->with('success', 'data berhasil di hapus');
    }
}
