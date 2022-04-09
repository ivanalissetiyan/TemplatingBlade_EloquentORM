<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;



class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clubs = [
            [
                'stadia_id' => '1',
                'name' => 'chelsea',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/25/t8.png',
                'url' => 'www.chelsea.com',
                'thropy' => 19,
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'stadia_id' => '2',
                'name' => 'Arsenal',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/50/t3.png',
                'url' => 'www.arsenal.com',
                'thropy' => 8,
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'stadia_id' => '3',
                'name' => 'Manchester United',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/50/t1.png',
                'url' => 'www.ManchesterUnited.com',
                'thropy' => 20,
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'stadia_id' => '4',
                'name' => 'Manchester City',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/50/t43.png',
                'url' => 'www.ManchesterCity.com',
                'thropy' => 3,
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'stadia_id' => '5',
                'name' => 'Liverpool',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/50/t14.png',
                'url' => 'www.Liverpool.com',
                'thropy' => 11,
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'stadia_id' => '6',
                'name' => 'Tottenham Hotspur',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/50/t6.png',
                'url' => 'www.TottenhamHotspur.com',
                'thropy' => 1,
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
        ];

        Club::insert($clubs);
    }
}
