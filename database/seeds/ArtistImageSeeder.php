<?php

use Illuminate\Database\Seeder;

class ArtistImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('artist_images')->insert([
            [
                'artist_id' => 1,
                'filename' => 'bob-delyn.png',
            ],
            [
                'artist_id' => 2,
                'filename' => 'caban.png',
            ],
            [
                'artist_id' => 3,
                'filename' => 'candelas1.png',
            ],
            [
                'artist_id' => 3,
                'filename' => 'candelas2.png',
            ],
            [
                'artist_id' => 4,
                'filename' => 'caryl1.png',
            ],
            [
                'artist_id' => 4,
                'filename' => 'caryl2.png',
            ],
            [
                'artist_id' => 5,
                'filename' => 'cofi-bach-a-tew-shady.png',
            ],
            [
                'artist_id' => 6,
                'filename' => 'colorama.png',
            ],
            [
                'artist_id' => 7,
                'filename' => 'cowbois-rhos-botwnnog.png',
            ],
            [
                'artist_id' => 8,
                'filename' => 'datblygu.png',
            ],
            [
                'artist_id' => 9,
                'filename' => 'dyfrig-evans.png',
            ],
            [
                'artist_id' => 10,
                'filename' => 'ems.png',
            ],
            [
                'artist_id' => 11,
                'filename' => 'endaf-emlyn1.png',
            ],
            [
                'artist_id' => 11,
                'filename' => 'endaf-emlyn2.png',
            ],
            [
                'artist_id' => 12,
                'filename' => 'gareth-bonello.png',
            ],
            [
                'artist_id' => 13,
                'filename' => 'geraint-jarman.png',
            ],
            [
                'artist_id' => 14,
                'filename' => 'gorkys.png',
            ],
            [
                'artist_id' => 15,
                'filename' => 'gruff-rhys.png',
            ],
            [
                'artist_id' => 16,
                'filename' => 'huw-chiswell.png',
            ],
            [
                'artist_id' => 17,
                'filename' => 'hyll.png',
            ],
            [
                'artist_id' => 18,
                'filename' => 'iwan-llwyd.png',
            ],
            [
                'artist_id' => 19,
                'filename' => 'iwcs-a-doyle.png',
            ],
            [
                'artist_id' => 20,
                'filename' => 'lleuwen.png',
            ],
            [
                'artist_id' => 21,
                'filename' => 'locut-sleifar.png',
            ],
            [
                'artist_id' => 22,
                'filename' => 'mc-mabon.png',
            ],
            [
                'artist_id' => 23,
                'filename' => 'mei-mac.png',
            ],
            [
                'artist_id' => 24,
                'filename' => 'meic-stephens1.png',
            ],
            [
                'artist_id' => 24,
                'filename' => 'meic-stephens2.png',
            ],
            [
                'artist_id' => 25,
                'filename' => 'neu-unrhyw-declyn-arall.png',
            ],
            [
                'artist_id' => 26,
                'filename' => 'sbardun.png',
            ],
            [
                'artist_id' => 27,
                'filename' => 'sfa1.png',
            ],
            [
                'artist_id' => 27,
                'filename' => 'sfa2.png',
            ],
            [
                'artist_id' => 28,
                'filename' => 'steve-eaves.png',
            ],
            [
                'artist_id' => 29,
                'filename' => 'swnami.png',
            ],
            [
                'artist_id' => 30,
                'filename' => 'topper.png',
            ],
            [
                'artist_id' => 31,
                'filename' => 'tynal-tywyll.png',
            ],
            [
                'artist_id' => 32,
                'filename' => 'y-bandana.png',
            ],
            [
                'artist_id' => 33,
                'filename' => 'y-blew.png',
            ],
            [
                'artist_id' => 34,
                'filename' => 'y-cyrff1.png',
            ],
            [
                'artist_id' => 34,
                'filename' => 'y-cyrff2.png',
            ],
            [
                'artist_id' => 35,
                'filename' => 'yr-anrhefn.png',
            ],
            [
                'artist_id' => 36,
                'filename' => 'yr-eira.png',
            ],
            [
                'artist_id' => 37,
                'filename' => 'yr-ods.png',
            ],
            [
                'artist_id' => 38,
                'filename' => 'ysgol-sul.png',
            ],
        ]);
        \DB::statement('UPDATE artist_images SET created_at = NOW(), updated_at = NOW();');
    }
}
