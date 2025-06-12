<?php

namespace Database\Seeders;

use App\Models\Decoration;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DecorationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Decoration::insert([
            ['name' => 'Ribbon Red', 'price' => 5000, 'stock' => 100, 'image' => 'ribbon_red.png'],
            ['name' => 'Flower Pink', 'price' => 8000, 'stock' => 50, 'image' => 'flower_pink.png'],
        ]);
    }
}
