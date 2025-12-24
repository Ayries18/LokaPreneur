@extends('layouts.app')

@section('content')
<h4 class="mb-4">Ringkasan</h4>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card card-shadow card-hover p-4">
            <div class="d-flex justify-content-between">
                <div>
                    <small>Total Produk</small>
                    <h3>{{ $produk }}</h3>
                </div>
                <i class="bi bi-box fs-1 text-warning"></i>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-shadow p-4">
            <div class="d-flex justify-content-between">
                <div>
                    <small>Total Transaksi</small>
                    <h3>{{ $transaksi }}</h3>
                </div>
                <i class="bi bi-receipt fs-1 text-primary"></i>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-shadow p-4">
            <div class="d-flex justify-content-between">
                <div>
                    <small>Total Pendapatan</small>
                    <h3>Rp {{ number_format($pendapatan) }}</h3>
                </div>
                <i class="bi bi-cash-stack fs-1 text-success"></i>
            </div>
        </div>
    </div>
</div>
@endsection
