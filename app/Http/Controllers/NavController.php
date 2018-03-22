<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Genre;

class NavController extends Controller
{
    public function read()
    {
        $albums = Album::all();
        $genres = Genre::all();
        return view('read', ['albums' => $albums, 'genres' => $genres]);
    }

    public function create()
    {
        $genres = Genre::all();
        $arrayGenres = [];
        foreach($genres as $genre)
        {
            $arrayGenres[$genre->id] = $genre->name ;
        }
        return view('create', ['genres' => $arrayGenres ]);
    }

    public function update(Request $request)
    {
        $album = Album::find($request->id);
        return view('update', ['album' => $album]);
    }

    public function createGenre()
    {
        return view('updateGenre');
    }
}
