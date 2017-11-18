<?php

namespace App;

class Suggestion extends BaseModel
{    
    protected $casts = ['processed' => true];
    
    public function setTwitterAttribute($twitter)
    {
        $this->attributes['twitter'] = ltrim($twitter, '@'); 
    }
    
    public function scopeUnprocessed($q)
    {
        return $q->where('processed', false)->get();
    }
}
