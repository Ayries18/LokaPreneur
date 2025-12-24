<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // DASHBOARD ADMIN
    public function dashboard()
    {
        // 🔒 CEK ROLE ADMIN
        if (auth()->user()->role != 'admin') {
            abort(403);
        }

        $totalUMKM = User::where('role', 'umkm')->count();
        $totalProduk = Product::count();
        $totalTransaksi = Transaction::count();
        $totalPendapatan = Transaction::sum('total');

        return view('admin.dashboard', compact(
            'totalUMKM',
            'totalProduk',
            'totalTransaksi',
            'totalPendapatan'
        ));
    }

    // LIHAT SEMUA UMKM
    public function umkm()
    {
        if (auth()->user()->role != 'admin') {
            abort(403);
        }

        $umkm = User::where('role', 'umkm')->get();
        return view('admin.umkm', compact('umkm'));
    }
}
