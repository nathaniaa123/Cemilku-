<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSnackSeeder extends Seeder
{
    public function run()
    {
        DB::table('collection_snack')->insert([
            ['collection_id' => 1, 'snack_id' => 1, 'quantity' => 2], // Beng-Beng
            ['collection_id' => 1, 'snack_id' => 2, 'quantity' => 1], // Oreo
            ['collection_id' => 1, 'snack_id' => 3, 'quantity' => 3], // SilverQueen

            ['collection_id' => 2, 'snack_id' => 3, 'quantity' => 1], // SilverQueen
            ['collection_id' => 2, 'snack_id' => 4, 'quantity' => 2], // Tango
        ]);
    }
}

