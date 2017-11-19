<?php

namespace App\Classes;

use App\Suggestion;

/**
 * Notification
 *
 * @author Mei Gwilym <mei.gwilym@stockomendation.com>
 */
class Notification
{
    public static function dm(Suggestion $suggestion)
    {
        if(\App::environment('production'))
        {
            // send a dm to Yws
            $dm = ['screen_name' => 'ywsgwynedd', 'text' => 'Awgrym newydd ar gyfer @geiriauCaneuon. Lyrics gan '.$suggestion->artist.', awgrymwyd gan '.$suggestion->twitter];
            \Twitter::postDm($dm);
            \Log::info('Sent a DM for new suggestion');
        }
    }
}
