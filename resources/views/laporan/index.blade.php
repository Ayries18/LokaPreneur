@extends('layouts.app')

@section('content')
<h4 class="mb-4">Laporan Transaksi</h4>

<!-- TABEL -->
<div class="card card-shadow p-3">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Produk</th>
            <th class="text-center">Qty</th>
            <th class="text-end">Harga</th>
            <th class="text-end">Total</th>
        </tr>
    </thead>
    <tbody>
        @forelse($transaksi as $t)
        <tr>
            <td>{{ \Carbon\Carbon::parse($t->tanggal)->format('d/m/Y') }}</td>
            <td>{{ $t->nama_produk }}</td>
            <td class="text-center">{{ $t->qty }}</td>
            <td class="text-end">Rp {{ number_format($t->harga) }}</td>
            <td class="text-end">Rp {{ number_format($t->total) }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center py-4 text-muted">
                Tidak ada data transaksi
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>
@endsection
