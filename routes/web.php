<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', function () {
    return redirect('/');
})->name('logout');

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/diskon', function () {
    return view('diskon');
});

Route::get('/paket', function () {
    return view('paket');
});

Route::post('/login', function () {
    return redirect('/dashboard');
})->name('login.post');

Route::get('/dashboard', function () {
    $pendaftaran = \DB::table('pendaftaranbimbel')->orderBy('created_at', 'desc')->get();
    $totalPendaftar = $pendaftaran->count();
    return view('dashboard', compact('pendaftaran', 'totalPendaftar'));
})->name('dashboard');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/pendaftar/{id}', [RegisterController::class, 'show'])->name('pendaftar.show');
Route::get('/pendaftar/{id}/edit', [RegisterController::class, 'edit'])->name('pendaftar.edit');
Route::put('/pendaftar/{id}', [RegisterController::class, 'update'])->name('pendaftar.update');
Route::delete('/pendaftar/{id}', [RegisterController::class, 'destroy'])->name('pendaftar.destroy');

Route::resource('packages', PackageController::class);
