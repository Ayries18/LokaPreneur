@extends('layouts.app')

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<div class="d-flex justify-content-between mb-4">
    <h4>Produk Saya</h4>
    <a href="{{ route('produk.create') }}" class="btn btn-tambah-produk">
        + Tambah Produk
    </a>
</div>

<div class="card card-shadow p-3">
    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produk as $p)
            <tr>
                <td>
                    @if($p->gambar)
                        <img src="{{ asset('storage/' . $p->gambar) }}" width="50" height="50" class="rounded">
                    @else
                        <span class="text-muted">No Image</span>
                    @endif
                </td>
                <td>{{ $p->nama }}</td>
                <td>Rp {{ number_format($p->harga) }}</td>
                <td>{{ $p->stok }}</td>
                <td>
                    <a href="{{ route('produk.edit', $p) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form method="POST" action="{{ route('produk.destroy', $p) }}" class="d-inline" onsubmit="return confirm('Yakin hapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">
                    Belum ada produk. <a href="{{ route('produk.create') }}">Tambah produk pertama</a>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
