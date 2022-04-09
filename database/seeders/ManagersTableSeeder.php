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
                'photo' => 'https://statik.tempo.co/data/2021/05/06/id_1019673/1019673_720.jpg',
                'name' => 'thomas tuchel',
                'old' => '47',
                'nationality' => 'Germany',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '2',
                'photo' => 'https://cdn1-production-images-kly.akamaized.net/z8DamuAOG2rwJsOHpKWj2XYJviA=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3600666/original/041606900_1634092810-000_9NC73R.jpg',
                'name' => 'Mikel Arteta',
                'old' => '38',
                'nationality' => 'Spain',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '3',
                'photo' => 'https://img.okezone.com/content/2021/04/12/51/2393179/5-pelatih-yang-pernah-berseteru-dengan-jose-mourinho-vlA2VDsLWj.jpg',
                'name' => 'Jose Morinho',
                'old' => '49',
                'nationality' => 'Portugal',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '4',
                'photo' => 'https://batamekspres.id/aset/uploads/2021/01/pep-scrollin.jpg',
                'name' => 'Josep GUardiola',
                'old' => '51',
                'nationality' => 'Spain',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '5',
                'photo' => 'https://images.bisnis-cdn.com/posts/2020/08/15/1279760/jurgen-klopp-liverpoolfc-com-msl2.jpeg.jpg',
                'name' => 'Jorgen Klop',
                'old' => '56',
                'nationality' => 'Spain',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id' => '6',
                'photo' => 'https://asset.kompas.com/crops/Wgwq3SiiJDaYXKSt4u6aPbZb5Is=/27x0:585x372/750x500/data/photo/2019/04/18/1876016944.jpg',
                'name' => 'Antonio Conte',
                'old' => '53',
                'nationality' => 'Italy',
                'created_at' => '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
        ];
        Manager::insert($managers);
    }
}
