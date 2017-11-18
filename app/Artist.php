<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends BaseModel
{
    public function lyrics()
    {
        return $this->hasMany(Lyric::class);
    }
    
    public function images()
    {
        return $this->hasMany(ArtistImage::class);
    }
    
    public function setTwitterAttribute($twitter)
    {
        return ltrim($twitter, '@');
    }

    public function getTwitterUrlAttribute()
    {
        if($this->attributes['twitter'])
            return 'https://twitter.com/'.$this->attributes['twitter'];
    }
    
    public function getTwitterHandleAttribute()
    {
        if($this->attributes['twitter'])
            return '@'.$this->attributes['twitter'];
    }
}
