@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Paket</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('packages.create') }}" class="btn btn-primary mb-3">Tambah Paket Baru</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $package)
                <tr>
                    <td>{{ $package->id }}</td>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->description }}</td>
                    <td>Rp {{ number_format($package->price, 2) }}</td>
                    <td>
                        <a href="{{ route('packages.show', $package->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
