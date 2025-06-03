<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    public function run()
    {
        Collection::insert([
            [
                'name' => 'Tower Lebaran',
                'type' => 'tower',
                'layer' => 3,
                'snack_id_1' => 1, // Beng-Beng
                'snack_id_2' => 2, // Oreo
                'snack_id_3' => 3, // SilverQueen
                'snack_id_4' => null,
            ],
            [
                'name' => 'Bouquet Valentine',
                'type' => 'bouquet',
                'layer' => 2,
                'snack_id_1' => 3, // SilverQueen
                'snack_id_2' => 4, // Tango
                'snack_id_3' => null,
                'snack_id_4' => null,
            ],
        ]);
    }
}
