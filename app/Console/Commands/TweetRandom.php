<?php

namespace App\Console\Commands;

use App\Log;
use Illuminate\Console\Command;

class TweetRandom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweet:random';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Throws a dice to send a tweet';

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
        $latest = Log::orderBy('created_at', 'DESC')->get();
        
        // wait at least two hours before tweeting again 
        if($latest->created_at->addHours(2) > date_create())
        {
            return;
        }
        
        // throw a 180 sided dice 
        $rand = mt_rand(0, 180);
        if($rand == 40)
        {
            $this->call('tweet:post '.$latest->artist_id);
        }
    }
}
