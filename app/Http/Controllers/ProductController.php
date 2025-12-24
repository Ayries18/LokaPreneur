<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function edit(Product $produk) {
    return view('produk.edit', compact('produk'));
}

public function update(Request $r, Product $produk) {
    $r->validate([
        'nama' => 'required|string|max:255',
        'harga' => 'required|numeric|min:0',
        'stok' => 'required|integer|min:0'
    ]);

    $produk->update($r->only('nama','harga','stok'));
    return redirect('/produk')->with('success', 'Produk berhasil diupdate');
}

public function destroy(Product $produk) {
    $produk->delete();
    return redirect('/produk')->with('success', 'Produk berhasil dihapus');
}


    public function marketplace()
    {
        $produk = Product::all();
        return view('marketplace', compact('produk'));
    }

    public function index()
    {
        $produk = Product::where('user_id', auth()->id())->get();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $r)
    {
        $r->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $img = null;

        if ($r->hasFile('gambar')) {
            $img = $r->file('gambar')->store('uploads', 'public');
        }

        Product::create([
            'user_id' => auth()->id(),
            'nama'    => $r->nama,
            'harga'   => $r->harga,
            'stok'    => $r->stok,
            'gambar'  => $img
        ]);

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan');
    }
}