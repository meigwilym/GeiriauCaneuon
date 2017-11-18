<?php

namespace App;

class Log extends BaseModel
{
    public function lyric()
    {
        return $this->belongsTo(Lyric::class);
    }

    public function image()
    {
        return $this->belongsTo(ArtistImage::class);
    }
}
