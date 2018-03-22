<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

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
}
