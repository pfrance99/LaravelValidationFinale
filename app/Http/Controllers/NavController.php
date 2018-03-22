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
        return view('read', ['albums' => $albums]);
    }

    public function create()
    {
        return view('create');
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
