<?php

namespace Database\Seeders;

use App\Models\Stadium;
use Illuminate\Database\Seeder;

class StadiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stadia = [
            [
                'name' => 'Stanford Bridge',
                'capacity' => 40000,
                'address' => 'Stanford Bridge, Fulham Road, London, SW6 1HS',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'name' => 'Emirates Bridge',
                'capacity' => 60000,
                'address' => 'Arsenal, Fulham Road, London, SW6 1HS',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'name' => 'Old Trafford',
                'capacity' => 74000,
                'address' => 'Manchester United, Fulham Road, London, SW6 1HS',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'name' => 'Etihad Stadium',
                'capacity' => 55000,
                'address' => 'Manchester City, Fulham Road, London, SW6 1HS',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'name' => 'Anfield',
                'capacity' => 53000,
                'address' => 'Liverpool, Fulham Road, London, SW6 1HS',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'name' => 'Tottenham Hotspur Stadium',
                'capacity' => 62000,
                'address' => 'Tottenham, Fulham Road, London, SW6 1HS',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ]

        ];
        Stadium::insert($stadia);
    }
}
