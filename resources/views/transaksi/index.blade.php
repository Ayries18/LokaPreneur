@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>Riwayat Transaksi</h3>
    <a href="/transaksi/create" class="btn btn-primary">+ Transaksi Baru</a>
</div>

<table class="table table-bordered bg-white shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>Produk</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaksi as $t)
        <tr>
            <td>{{ $t->product->nama }}</td>
            <td>{{ $t->qty }}</td>
            <td>Rp {{ number_format($t->total) }}</td>
            <td>{{ $t->created_at->format('d-m-Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
