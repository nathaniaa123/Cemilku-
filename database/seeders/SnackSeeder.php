<?php

namespace Database\Seeders;

use App\Models\Snack;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SnackSeeder extends Seeder
{
    public function run()
    {
        Snack::insert([
            ['name' => 'Beng-Beng', 'price' => 2500, 'stock' => 100],
            ['name' => 'Oreo', 'price' => 3000, 'stock' => 80],
            ['name' => 'SilverQueen', 'price' => 10000, 'stock' => 50],
            ['name' => 'Tango', 'price' => 3500, 'stock' => 60],
            ['name' => 'Biskuat', 'price' => 2000, 'stock' => 90],
        ]);
    }
}
