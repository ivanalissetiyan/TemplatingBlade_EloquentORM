<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = [
            [
                'clubs_id' => '1',
                'photo' => '',
                'name' => 'Timo Werner',
                'height' => '180',
                'position' => 'Penyerang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '2',
                'photo' => '',
                'name' => 'Mason Mount',
                'height' => '180',
                'position' => 'Gelandang Serang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '3',
                'photo' => '',
                'name' => 'Paul Pogba',
                'height' => '180',
                'position' => 'Gelandang Bertahan',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '4',
                'photo' => '',
                'name' => 'David De gea',
                'height' => '180',
                'position' => 'Kiper',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '5',
                'photo' => '',
                'name' => 'Hugo Lloris',
                'height' => '180',
                'position' => 'Kiper',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '6',
                'photo' => '',
                'name' => 'Kevin De Bryune',
                'height' => '180',
                'position' => 'Gelandang Serang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '7',
                'photo' => '',
                'name' => 'Raheem Sterling',
                'height' => '180',
                'position' => 'Penyerang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '8',
                'photo' => '',
                'name' => 'Rafael Varane',
                'height' => '180',
                'position' => 'Bek',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '9',
                'photo' => '',
                'name' => 'Rudiger',
                'height' => '180',
                'position' => 'Bek',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '10',
                'photo' => '',
                'name' => 'John Stones',
                'height' => '180',
                'position' => 'Bek',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
        ];
        Player::insert($players);
    }
}
