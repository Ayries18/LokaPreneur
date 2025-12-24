@extends('layouts.app')

@section('content')
<h4 class="mb-4">Dashboard</h4>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card card-shadow p-4">
            <small>Total Produk</small>
            <h3>{{ $produk }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-shadow p-4">
            <small>Total Transaksi</small>
            <h3>{{ $transaksi }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-shadow p-4">
            <small>Total Pendapatan</small>
            <h3>Rp {{ number_format($pendapatan) }}</h3>
        </div>
    </div>
</div>
@endsection
