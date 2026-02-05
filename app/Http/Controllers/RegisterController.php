<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'no_pribadi' => 'required|string|max:20',
            'no_wali' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'pilih_paket' => 'required|string|max:50',
            'voucher_code' => 'nullable|string|max:100',
        ]);

        
        DB::table('pendaftaranbimbel')->insert([
            'nama' => $validated['nama'],
            'asal_sekolah' => $validated['asal_sekolah'],
            'no_pribadi' => $validated['no_pribadi'],
            'no_wali' => $validated['no_wali'],
            'email' => $validated['email'],
            'alamat' => $validated['alamat'],
            'pilih_paket' => $validated['pilih_paket'],
            'voucher_code' => $validated['voucher_code'] ?? null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/')->with('success', 'Pendaftaran berhasil! Terima kasih telah mendaftar di Bimble Online.');
    }

    public function show($id)
    {
        $pendaftar = DB::table('pendaftaranbimbel')->where('id', $id)->first();
        
        if (!$pendaftar) {
            return redirect('/dashboard')->with('error', 'Data tidak ditemukan');
        }

        return view('pendaftar.detail', compact('pendaftar'));
    }

    public function edit($id)
    {
        $pendaftar = DB::table('pendaftaranbimbel')->where('id', $id)->first();
        
        if (!$pendaftar) {
            return redirect('/dashboard')->with('error', 'Data tidak ditemukan');
        }

        return view('pendaftar.edit', compact('pendaftar'));
    }

    public function update(Request $request, $id)
    {
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'no_pribadi' => 'required|string|max:20',
            'no_wali' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'pilih_paket' => 'required|string|max:50',
            'voucher_code' => 'nullable|string|max:100',
        ]);

        
        DB::table('pendaftaranbimbel')
            ->where('id', $id)
            ->update([
                'nama' => $validated['nama'],
                'asal_sekolah' => $validated['asal_sekolah'],
                'no_pribadi' => $validated['no_pribadi'],
                'no_wali' => $validated['no_wali'],
                'email' => $validated['email'],
                'alamat' => $validated['alamat'],
                'pilih_paket' => $validated['pilih_paket'],
                'voucher_code' => $validated['voucher_code'] ?? null,
                'updated_at' => now(),
            ]);

        return redirect('/dashboard')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('pendaftaranbimbel')->where('id', $id)->delete();
        return redirect('/dashboard')->with('success', 'Data berhasil dihapus');
    }
}

