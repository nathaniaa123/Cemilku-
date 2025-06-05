<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\Collection;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil 2 user pertama yang role-nya 'user'
        $users = User::where('role', 'user')->take(2)->get();

        // Ambil collection berdasarkan name
        $tower = Collection::where('name', 'Tower Lebaran')->first();
        $bouquet = Collection::where('name', 'Bouquet Valentine')->first();

        // Validasi
        if (!$tower || !$bouquet) {
            $this->command->error('Collection tidak ditemukan!');
            return;
        }

        // User pertama pesan Tower Lebaran 2x
        $order1 = Order::create([
            'user_id' => $users[0]->id,
            'status' => 'paid',
            'total_price' => 0,
        ]);

        OrderDetail::create([
            'order_id' => $order1->id,
            'collection_id' => $tower->id,
            'quantity' => 2,
            'price' => $tower->price,
        ]);

        $order1->update([
            'total_price' => $tower->price * 2,
        ]);

        // User kedua pesan Bouquet Valentine 1x dan Tower Lebaran 1x
        $order2 = Order::create([
            'user_id' => $users[1]->id,
            'status' => 'completed',
            'total_price' => 0,
        ]);

        OrderDetail::create([
            'order_id' => $order2->id,
            'collection_id' => $bouquet->id,
            'quantity' => 1,
            'price' => $bouquet->price,
        ]);

        OrderDetail::create([
            'order_id' => $order2->id,
            'collection_id' => $tower->id,
            'quantity' => 1,
            'price' => $tower->price,
        ]);

        $order2->update([
            'total_price' => $bouquet->price + $tower->price,
        ]);
    }
}
