<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\SnackSeeder;
use Database\Seeders\CollectionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            SnackSeeder::class,
            CollectionSeeder::class,
            CollectionSnackSeeder::class,
            OrderSeeder::class,
            DecorationSeeder::class,
            AddressSeeder::class,
        ]);
    }
}
