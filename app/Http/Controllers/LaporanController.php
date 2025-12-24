<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaksi::query();

        // Filter tanggal
        if ($request->from && $request->to) {
            $query->whereBetween('tanggal', [
                $request->from,
                $request->to
            ]);
        }

        // Filter search nama produk
        if ($request->search) {
            $query->where('nama_produk', 'like', '%' . $request->search . '%');
        }

        $transaksi = $query->orderBy('tanggal', 'desc')->get();
        $totalPendapatan = $transaksi->sum('total');

        return view('laporan.index', compact(
            'transaksi',
            'totalPendapatan'
        ));
    }
}
