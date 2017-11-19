<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtistImage extends BaseModel
{
    public $storagePath = 'app/public/imgz/';
    
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
    
    public function logs()
    {
        return $this->hasMany(Log::class);
    }
    
    public function url()
    {
        return asset('storage/imgz/'.$this->filename);
    }
    
    public function filepath()
    {
        return storage_path($this->storagePath.$this->filename);
    }
}
