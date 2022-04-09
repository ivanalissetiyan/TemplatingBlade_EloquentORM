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
                'photo' => 'asdahsjd.jpg',
                'name' => 'Timo Werner',
                'height' => '180',
                'position' => 'Penyerang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '2',
                'photo' => 'asdahsjd.jpg',
                'name' => 'Mesut Ozil',
                'height' => '180',
                'position' => 'Gelandang Serang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '3',
                'photo' => 'asdahsjd.jpg',
                'name' => 'David De Gea',
                'height' => '180',
                'position' => 'Kiper',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '4',
                'photo' => 'asdahsjd.jpg',
                'name' => 'Kevin De Bryune',
                'height' => '180',
                'position' => 'Gelandang Serang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '5',
                'photo' => 'asdahsjd.jpg',
                'name' => 'Mohammed Salah',
                'height' => '180',
                'position' => 'Penyerang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '6',
                'photo' => 'asdahsjd.jpg',
                'name' => 'Harry Kane',
                'height' => '180',
                'position' => 'Penyerang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
        ];
        Player::insert($players);
    }
}
