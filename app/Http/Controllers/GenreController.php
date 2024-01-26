<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function genre()
    {
        $genres = Genre::all();
        return view('home')->with(['genres' => $genres]);
    }

    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genres.show')->with(['genre' => $genre]);
    }
}
