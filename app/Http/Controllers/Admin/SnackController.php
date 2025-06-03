<?php

namespace App\Http\Controllers\Admin;

use App\Models\Snack;
use App\Exports\SnackExport;
use App\Imports\SnackImport;
// use App\Exports\SnacksExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;


class SnackController extends Controller
{

public function index()
{
    // SELECT * FROM snacks;
    $snacks = Snack::all();
    return view('admin.snack.index', compact('snacks'));
}

public function create()
{
    return view('admin.snack.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer|min:0',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    if ($request->hasFile('image')){
        $validated['image'] = $request->file('image')->store('snacks', 'public');
    }

    Snack::create($validated);

    return redirect()->route('admin.snack.index')->with('success', 'Snack ditambahkan!');
}

public function edit(Snack $snack)
{
    return view('admin.snack.edit', compact('snack'));
}

public function update(Request $request, Snack $snack)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer|min:0',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($snack->image && Storage::disk('public')->exists($snack->image)) {
            Storage::disk('public')->delete($snack->image);
        }

        // Simpan gambar baru
        $validated['image'] = $request->file('image')->store('snacks', 'public');
    }

    $snack->update($validated);

    return redirect()->route('admin.snack.index')->with('success', 'Snack diperbarui!');
}

    
public function destroy(Snack $snack)
{
    $snack->delete();

    return redirect()->route('admin.snack.index')->with('success', 'Snack dihapus!');
}

public function export()
{
    return Excel::download(new SnackExport, 'snack.xlsx');
}

public function import(Request $request)
{
    $request->validate([
        'file' => 'required|file|mimes:xlsx,xls,csv',
    ]);

    Excel::import(new SnackImport, $request->file('file'));

    return redirect()->route('admin.snack.index')->with('success', 'Data snack berhasil diimpor!');
}

public function show($id)
{
    return redirect()->route('admin.snack.index');
}


}
