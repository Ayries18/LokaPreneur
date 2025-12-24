@extends('layouts.app')

@section('content')
<h4 class="mb-4">Tambah Produk</h4>

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
<form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label>Nama Produk</label>
    <input class="form-control" name="nama" value="{{ old('nama') }}" required>
</div>

<div class="mb-3">
    <label>Harga</label>
    <input type="number" class="form-control" name="harga" value="{{ old('harga') }}" required>
</div>

<div class="mb-3">
    <label>Stok</label>
    <input type="number" class="form-control" name="stok" value="{{ old('stok') }}" required>
</div>

<div class="mb-3">
    <label>Gambar</label>
    <input type="file" class="form-control" name="gambar" accept="image/*">
</div>

<button class="btn btn-primary btn-simpan">Simpan</button>
<a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</form>
</div>
@endsection
