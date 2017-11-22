<?php

namespace App\Http\Controllers;

use App\Lyric;
use App\Http\Requests\LyricSaveRequest;

class LyricController extends Controller
{    
    public function edit(Lyric $lyric)
    {
        return view('lyrics.edit')->with(compact('lyric'));
    }
    
    public function update(Lyric $lyric, LyricSaveRequest $request)
    {
        $lyric->update($request->only(['lyric', 'suggested_by']));
        
        return redirect()->route('artists.show', $lyric->artist);
    }
}
