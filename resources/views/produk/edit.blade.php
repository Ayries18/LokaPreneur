@extends('layouts.app')

@section('content')
<h4 class="mb-4">Edit Produk</h4>

@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card card-shadow p-4 col-md-6">
<form method="POST" action="{{ route('produk.update', $produk) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Produk</label>
        <input class="form-control" name="nama" value="{{ old('nama', $produk->nama) }}" required>
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" class="form-control" name="harga" value="{{ old('harga', $produk->harga) }}" required>
    </div>

    <div class="mb-3">
        <label>Stok</label>
        <input type="number" class="form-control" name="stok" value="{{ old('stok', $produk->stok) }}" required>
    </div>

    @if($produk->gambar)
    <div class="mb-3">
        <label>Gambar Saat Ini</label><br>
        <img src="{{ asset('storage/' . $produk->gambar) }}" width="100" class="mb-2">
    </div>
    @endif

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</form>
</div>
@endsection
