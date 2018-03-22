<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Genre;

class StockController extends Controller
{
    public function CreateOne(Request $request)
    {
        $newAlbum = new Album();
        $newAlbum->artist = $request->artist;
        $newAlbum->name = $request->name;
        $newAlbum->date = $request->date;
        $newAlbum->stock = $request->stock;
        $newAlbum->save();
        $allAlbums = Album::all();
        $LastAlbum = $allAlbums->where('artist', '=', $request->artist)
                                ->where('name', '=', $request->name)
                                ->first();
        $album = Album::find($LastAlbum->id);
        $album->genres()->attach($request->genre_id);
        return redirect('/read');
    }

    public function DeleteOne(Request $request)
    {
        Album::find($request->id)->delete();
        return redirect('/read');
    }

    public function UpdateOne(Request $request)
    {
        $newAlbum = Album::find($request->id);
        $newAlbum->artist = $request->artist;
        $newAlbum->name = $request->name;
        $newAlbum->date = $request->date;
        $newAlbum->stock = $request->stock;
        $newAlbum->save();
        return redirect('/read');
    }

    public function CreateGenre(Request $request)
    {
        $newGenre = new Genre();
        $newGenre->name = $request->name;
        $newGenre->save();
        return redirect('/read');
    }
}