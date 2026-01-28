@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Paket</h1>
    <form action="{{ route('packages.update', $package->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Paket</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $package->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description">{{ $package->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $package->price }}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Batal</a>
