<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(LyricSeeder::class);
        $this->call(ArtistImageSeeder::class);
    }
}
