@extends('layouts.app')

@section('content')
<h4 class="mb-4">Marketplace Produk UMKM</h4>

<div class="row g-4">
@foreach($produk as $p)
<div class="col-md-3">
    <div class="card shadow-sm">
        <img src="/storage/{{ $p->gambar }}" class="card-img-top" style="height:180px;object-fit:cover">
        <div class="card-body">
            <h6>{{ $p->nama }}</h6>
            <p class="text-muted">Rp {{ number_format($p->harga) }}</p>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection
