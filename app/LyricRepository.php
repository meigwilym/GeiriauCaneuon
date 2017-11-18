<?php

namespace App;

use Illuminate\Support\Facades\Storage;

/**
 * Fetch random lyrics 
 *
 * @author Mei Gwilym <mei.gwilym@gmail.com>
 */
class LyricRepository
{
    protected $lyrics;

    public function __construct()
    {
        $this->lyrics = json_decode(Storage::get('lyrics.json'));
    }

    public function getRandomLyric()
    {
        $randomLyric = $this->lyrics[array_rand($this->lyrics)];
        return $this->makeLyric($randomLyric);
    }

    public function makeLyric($lyric)
    {
	$twitter = (isset($lyric->artist->twitter)) ? $lyric->artist->twitter : null;

        return new Lyric($lyric->lyric, new Artist($lyric->artist, $lyric->artist->img, $twitter));
    }
}
