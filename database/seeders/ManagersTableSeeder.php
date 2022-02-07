<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managers = [
            [
                'clubs_id' => '1',
                'photo' => '',
                'name' => 'thomas tuchel',
                'old' => '47',
                'nationality' => 'Germany',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '2',
                'photo' => '',
                'name' => 'Mikel Arteta',
                'old' => '38',
                'nationality' => 'Spain',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '3',
                'photo' => '',
                'name' => 'Jose Morinho',
                'old' => '38',
                'nationality' => 'Spain',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '4',
                'photo' => '',
                'name' => 'Josep GUardiola',
                'old' => '38',
                'nationality' => 'Spain',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '5',
                'photo' => '',
                'name' => 'Jorgen Klop',
                'old' => '38',
                'nationality' => 'Spain',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '6',
                'photo' => '',
                'name' => 'Antonio Conte',
                'old' => '38',
                'nationality' => 'Spain',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
        ];
        Manager::insert($managers);
    }
}
