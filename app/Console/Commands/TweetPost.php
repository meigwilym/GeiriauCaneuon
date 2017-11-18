<?php

namespace App\Console\Commands;

use App\LyricRepository;
use App\ComposeTweet;
use Illuminate\Console\Command;

class TweetPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweet:post';

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
        // get random saying
        $this->lyrics = new LyricRepository;
        $lyric = $this->lyrics->getRandomLyric();
        
        // send to twitter 
        if(\App::environment('production'))
        {
            $tweet = ['status' => ComposeTweet::compose($lyric)];
            if($lyric->getArtist()->hasImages())
            {
                $tweet['media_ids'] = $this->call('tweet:image', ['image' => $lyric->getArtist()->getRandomImagePath()]);
            }
            \Twitter::postTweet($tweet);
        } 
        $this->info('Posted "'.$lyric->getLyric().'"');
        \Log::info('Posted: "'.$lyric->getLyric().'"');
    }
}
