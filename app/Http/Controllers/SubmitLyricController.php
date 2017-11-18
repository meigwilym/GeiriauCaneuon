<?php

namespace App\Http\Controllers;

use App\Artist;
use App\ArtistImage;
use App\Lyric;
use App\Http\Requests\ArtistCreateRequest;
use App\Http\Requests\LyricSaveRequest;
use App\Http\Requests\ArtistImageCreateRequest;

class SubmitLyricController extends Controller
{
    public function createArtist()
    {
        return view('submit.artist');
    }
    
    public function storeArtist(ArtistCreateRequest $request)
    {
        $artist = Artist::create($request->only('name', 'twitter'));
        
        return redirect()->route('submit.image', $artist);
    }
    
    public function createArtistImage(Artist $artist)
    {
        return view('submit.image')->with(compact('artist'));
    }
    
    public function storeArtistImage(Artist $artist, ArtistImageCreateRequest $request)
    {
        $count = $artist->images->count() + 1;
        $filename = str_slug($artist->name.$count.'.'.$request->image->getClientOriginalExtension());
        
        $image = ArtistImage::make(['filename' => $filename]);
        $request->image->move(public_path('imgz'), $filename);
        
        $artist->images()->save($image); 
        
        if($request->input('redirect') == 1)
        {
            return redirect()->route('submit.image', $artist);
        }
        elseif($request->input('redirect') == 2)
        {
            return redirect()->route('submit.lyric', $artist);
        }
    }
    
    public function createLyric(Artist $artist = null)
    {
        return view('submit.lyric')->with(compact('artist'));
    }
    
    public function storeLyric(LyricSaveRequest $request)
    {
        $lyric = Lyric::create($request->only(['artist_id', 'lyric']));
        
        return redirect()->route('artists.show', $request->input('artist_id'));
    }
}
