<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
