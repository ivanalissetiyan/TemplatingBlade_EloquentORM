<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ClubsTableSeeder::class,
            ManagersTableSeeder::class,
            MatchesTableSeeder::class,
            PlayersTableSeeder::class,
            StadiaTableSeeder::class,
        ]);
    }
}
