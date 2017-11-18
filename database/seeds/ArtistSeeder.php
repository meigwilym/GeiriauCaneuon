<?php

use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('artists')->insert([
            [
                'id' => 1,
                'name' => 'Bob Delyn',
                'twitter' => null,
            ],
            [
                'id' => 2,
                'name' => 'Caban',
                'twitter' => null,
            ],
            [
                'id' => 3,
                'name' => 'Candelas',
                'twitter' => 'candelasband',
            ],
            [
                'id' => 4,
                'name' => 'Caryl Parry Jones',
                'twitter' => null,
            ],
            [
                'id' => 5,
                'name' => 'Cofi Bach a Tew Shady',
                'twitter' => null,
            ],
            [
                'id' => 6,
                'name' => 'Colorama',
                'twitter' => 'colorama_sound',
            ],
            [
                'id' => 7,
                'name' => 'Cowbois Rhos Botwnnog',
                'twitter' => 'CowboisRhB',
            ],
            [
                'id' => 8,
                'name' => 'Datblygu',
                'twitter' => 'Datblygu',
            ],
            [
                'id' => 9,
                'name' => 'Dyfrig Evans',
                'twitter' => null,
            ],
            [
                'id' => 10,
                'name' => 'Ems',
                'twitter' => null,
            ],
            [
                'id' => 11,
                'name' => 'Endaf Emlyn',
                'twitter' => 'EndafEmlyn',
            ],
            [
                'id' => 12,
                'name' => 'Gareth Bonello',
                'twitter' => 'ghbonello',
            ],
            [
                'id' => 13,
                'name' => 'Geraint Jarman',
                'twitter' => null,
            ],
            [
                'id' => 14,
                'name' => 'Gorky\'s Zygotic Mynci',
                'twitter' => null,
            ],
            [
                'id' => 15,
                'name' => 'Gruff Rhys',
                'twitter' => 'gruffingtonpost',
            ],
            [
                'id' => 16,
                'name' => 'Huw Chiswell',
                'twitter' => 'huwchiswell',
            ],
            [
                'id' => 17,
                'name' => 'Hyll',
                'twitter' => 'Hyllband',
            ],
            [
                'id' => 18,
                'name' => 'Iwan Llwyd',
                'twitter' => null,
            ],
            [
                'id' => 19,
                'name' => 'Iwcs a Doyle',
                'twitter' => null,
            ],
            [
                'id' => 20,
                'name' => 'Lleuwen',
                'twitter' => 'Lleuwen',
            ],
            [
                'id' => 21,
                'name' => 'Lo-Cut a Sleifar',
                'twitter' => null,
            ],
            [
                'id' => 22,
                'name' => 'MC Mabon',
                'twitter' => null,
            ],
            [
                'id' => 23,
                'name' => 'Mei Mac',
                'twitter' => null,
            ],
            [
                'id' => 24,
                'name' => 'Meic Stevens',
                'twitter' => null,
            ],
            [
                'id' => 25,
                'name' => 'Neu Unrhyw Declyn Arall',
                'twitter' => null,
            ],
            [
                'id' => 26,
                'name' => 'Sbardun',
                'twitter' => null,
            ],
            [
                'id' => 27,
                'name' => 'Super Furry Animals',
                'twitter' => 'superfurry',
            ],
            [
                'id' => 28,
                'name' => 'Steve Eaves',
                'twitter' => null,
            ],
            [
                'id' => 29,
                'name' => 'Swnami',
                'twitter' => 'swnami_',
            ],
            [
                'id' => 30,
                'name' => 'Topper',
                'twitter' => null,
            ],
            [
                'id' => 31,
                'name' => 'Tynal Tywyll',
                'twitter' => null,
            ],
            [
                'id' => 32,
                'name' => 'Y Bandana',
                'twitter' => null,
            ],
            [
                'id' => 33,
                'name' => 'Y Blew',
                'twitter' => null,
            ],
            [
                'id' => 34,
                'name' => 'Y Cyrff',
                'twitter' => null,
            ],
            [
                'id' => 35,
                'name' => 'Yr Anhrefn',
                'twitter' => null,
            ],
            [
                'id' => 36,
                'name' => 'Yr Eira',
                'twitter' => 'Yr_Eira',
            ],
            [
                'id' => 37,
                'name' => 'Yr Ods',
                'twitter' => 'yr_ods',
            ],
            [
                'id' => 38,
                'name' => 'Ysgol Sul',
                'twitter' => 'YsgolSul3',
            ],
        ]);
        \DB::statement('UPDATE artists SET created_at = NOW(), updated_at = NOW();');
    }
}
