<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Http\Requests\ArtistCreateRequest;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::paginate();        
        return view('artists.index')->with(compact('artists'));
    }
    
    public function show(Artist $artist)
    {
        $artist->load(['images', 'lyrics']);
        return view('artists.show')->with(compact('artist'));
    }
}
