<?php

namespace App\Classes;

use App\Lyric;

class ComposeTweet {

    protected $lyric;

    public static function compose(Lyric $lyric)
    {
        $update = $lyric->lyric;

	if(strlen($lyric->artist->twitter) > 0)
	{
	    $update .= " \n".$lyric->artist->twitter_handle;
        }
        return $update;
    }
}
