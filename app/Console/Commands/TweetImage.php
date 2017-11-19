<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class TweetImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweet:image {image}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Post an Image to twitter ready to be tweeted';
    
    protected $images;

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
	$contents = Storage::get($this->argument('image'));

        if(\App::environment('production'))
        {
            $response = \Twitter::uploadMedia(['media' => $contents]);
            \Log::info('posted image', [$response->media_id]);
            
            return $response->media_id_string;
        }
        
        return;        
    }
}
