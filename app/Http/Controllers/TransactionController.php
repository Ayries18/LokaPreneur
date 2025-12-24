<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;

class TransactionController extends Controller
{
    public function index()
    {
        $transaksi = Transaction::whereHas('product', function ($q) {
            $q->where('user_id', auth()->id());
        })->get();

        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $produk = Product::where('user_id', auth()->id())->get();
        return view('transaksi.create', compact('produk'));
    }

    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        Transaction::create([
            'user_id'    => auth()->id(),
            'product_id' => $product->id,
            'qty'        => $request->qty,
            'total'      => $product->harga * $request->qty
        ]);

        return redirect('/transaksi');
    }
}
