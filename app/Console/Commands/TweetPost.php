<?php

namespace App\Console\Commands;

use App\Log;
use App\Lyric;
use App\Classes\ComposeTweet;
use Illuminate\Console\Command;

class TweetPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweet:post {artist?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a tweet';
    
    
    protected $lyrics;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $artist_id = $this->argument('artist');
        $lyric = Lyric::where('artist_id', '<>', $artist_id)->random();
        $lyric->load(['artist.images']);
        
        // send to twitter 
        if(\App::environment('production'))
        {            
            $tweet = ['status' => ComposeTweet::compose($lyric)];
            
            if($lyric->artist->images->count() > 0)
            {
                $image = $lyric->artist->random();
                $tweet['media_ids'] = $this->call('tweet:image', ['image' => $image->filepath()]);
            }
            
            $response = \Twitter::postTweet($tweet);
            Log::create(['artist_id' => $lyric->artist->id, 'image_id' => $image->id,'tweet' => $response->id_str]);
            
            // reply to the tweet mentioning the person who suggested
            if($lyric->suggested_by != null)
            {
                \Twitter::postTweet(['in_reply_to_status_id' => $response->id, 'status' => $lyric->suggested_by.' Diolch am yr awgrym!']);
            }
            
        } 
        $this->info('Posted "'.$lyric->lyric.'"');
        \Log::info('Posted: "'.$lyric->lyric.'"');
    }
}
