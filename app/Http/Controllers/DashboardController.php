<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'produk'      => Product::count(),
            'transaksi'   => Transaksi::count(),
            'pendapatan'  => Transaksi::sum('total')
        ]);
    }
}
