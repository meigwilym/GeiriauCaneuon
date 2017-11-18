<?php

namespace App\Classes;

use App\Lyric;

class ComposeTweet {

    protected $lyric;

    public static function compose(Lyric $lyric)
    {
        $update = $lyric->getLyric();

        $twitter = $lyric->getArtist()->getTwitter();
	if($twitter != null)
	{
	    $update .= "\n@".$twitter;
        }
        return $update;
    }
}
