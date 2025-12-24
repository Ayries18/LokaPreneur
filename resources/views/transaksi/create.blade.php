@extends('layouts.app')

@section('content')
<h3 class="mb-4">Input Transaksi Penjualan</h3>

<div class="card shadow p-4 col-md-6">
<form method="POST" action="/transaksi">
@csrf

<label>Produk</label>
<select name="product_id" class="form-control mb-3">
    @foreach($produk as $p)
        <option value="{{ $p->id }}">
            {{ $p->nama }} - Rp {{ number_format($p->harga) }}
        </option>
    @endforeach
</select>

<label>Jumlah</label>
<input type="number" name="qty" class="form-control mb-3" required>

<button class="btn btn-success">Simpan Transaksi</button>
</form>
</div>
@endsection