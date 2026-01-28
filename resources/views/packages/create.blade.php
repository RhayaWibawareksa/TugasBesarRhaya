@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Paket Baru</h1>
    <form action="{{ route('packages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Paket</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
