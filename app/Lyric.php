<?php

namespace App;

class Lyric extends BaseModel
{
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    
    public function logs()
    {
        return $this->hasMany(Log::class);
    }
    
    public function setSuggestedByAttribute($suggestedBy)
    {
        return ltrim($suggestedBy, '@');
    }
    
    public function getSuggestedByAttribute()
    {
        if(strlen($this->attributes['suggested_by']) > 0)
        {
            return '@'.$this->attributes['suggested_by'];
        }
        
        return null;
    }
}
