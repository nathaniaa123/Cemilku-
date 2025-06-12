<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Snack;
use App\Models\Collection;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $snackCount = Snack::count();
        $collectionCount = Collection::count();
        $orderCount = Order::count();
        $userCount = User::count();

        // Collection terlaris minggu ini
        $topCollections = Collection::withSum(['orderDetails as total_sold' => function ($q) {
            $q->whereBetween('created_at', [now()->subWeek(), now()]);
        }], 'quantity')
        ->orderByDesc('total_sold')
        ->take(5)
        ->get();

        // Grafik penjualan 7 hari terakhir
        $salesChart = [
            'labels' => [],
            'data' => [],
        ];

        foreach (range(6, 0) as $day) {
            $date = now()->subDays($day)->format('Y-m-d');
            $salesChart['labels'][] = now()->subDays($day)->format('d M');
            $salesChart['data'][] = OrderDetail::whereDate('created_at', $date)->sum('quantity');
        }

        // Pesanan terbaru
        $latestOrders = Order::with('user')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'snackCount',
            'collectionCount',
            'orderCount',
            'userCount',
            'topCollections',
            'salesChart',
            'latestOrders'
        ));
    }
}
