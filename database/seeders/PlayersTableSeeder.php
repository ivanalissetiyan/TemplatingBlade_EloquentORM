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
                'photo' => 'https://media.vivagoal.com/2021/05/Timo-Werner.jpg',
                'name' => 'Timo Werner',
                'height' => '180',
                'position' => 'Penyerang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '2',
                'photo' => 'https://asset.kompas.com/crops/lS66_XgTvB0v2iQ5mjl0EbCa2HI=/0x44:493x373/750x500/data/photo/2020/03/31/5e82a420d8a70.jpg',
                'name' => 'Mesut Ozil',
                'height' => '178',
                'position' => 'Gelandang Serang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '3',
                'photo' => 'https://img.okezone.com/content/2021/09/20/45/2473775/gagalkan-penalti-west-ham-dan-jadi-pahlawan-manchester-united-david-de-gea-kehabisan-kata-kata-1jZNcm7NMv.jpg',
                'name' => 'David De Gea',
                'height' => '186',
                'position' => 'Kiper',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '4',
                'photo' => 'https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt5315c80a9355f2b4/60db263dc5c41538a152202d/7a626010bfdf128c488c1b56710d1dba1b5ab064.jpg?auto=webp&format=jpg&quality=100',
                'name' => 'Kevin De Bryune',
                'height' => '183',
                'position' => 'Gelandang Serang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '5',
                'photo' => 'https://gilabola.com/wp-content/uploads/2021/03/Screenshot_11-3-696x406.jpg',
                'name' => 'Mohammed Salah',
                'height' => '176',
                'position' => 'Penyerang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '6',
                'photo' => 'https://www.tuntor.com/wp-content/uploads/2020/04/Alasan-yang-Buat-Liverpool-Tak-Tertarik-Datangkan-Harry-Kane.jpg',
                'name' => 'Harry Kane',
                'height' => '189',
                'position' => 'Penyerang',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
        ];
        Player::insert($players);
    }
}
