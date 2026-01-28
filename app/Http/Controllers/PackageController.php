<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    
    public function index()
    {
        $packages = Package::all();
        return view('packages.index', compact('packages'));
    }

    
    public function create()
    {
        return view('packages.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        Package::create($request->all());

        return redirect()->route('packages.index')->with('success', 'Paket berhasil dibuat.');
    }

    
    public function show(string $id)
    {
        $package = Package::findOrFail($id);
        return view('packages.show', compact('package'));
    }

    
    public function edit(string $id)
    {
        $package = Package::findOrFail($id);
        return view('packages.edit', compact('package'));
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        $package = Package::findOrFail($id);
        $package->update($request->all());

        return redirect()->route('packages.index')->with('success', 'Paket berhasil diperbarui.');
    }

    
    public function destroy(string $id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('packages.index')->with('success', 'Paket berhasil dihapus.');
    }
}
