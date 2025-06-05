<?php

namespace App\Http\Controllers\Admin;

use App\Models\Decoration;
use App\Exports\DecorationExport;
use App\Imports\DecorationImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class DecorationController extends Controller
{
    public function index()
    {
        $decorations = Decoration::all();
        return view('admin.decoration.index', compact('decorations'));
    }

    public function create()
    {
        return view('admin.decoration.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('decorations', 'public');
        }

        Decoration::create($validated);

        return redirect()->route('admin.decoration.index')->with('success', 'Decoration ditambahkan!');
    }

    public function edit(Decoration $decoration)
    {
        return view('admin.decoration.edit', compact('decoration'));
    }

    public function update(Request $request, Decoration $decoration)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($decoration->image && Storage::disk('public')->exists($decoration->image)) {
                Storage::disk('public')->delete($decoration->image);
            }

            $validated['image'] = $request->file('image')->store('decorations', 'public');
        }

        $decoration->update($validated);

        return redirect()->route('admin.decoration.index')->with('success', 'Decoration diperbarui!');
    }

    public function destroy(Decoration $decoration)
    {
        $decoration->delete();

        return redirect()->route('admin.decoration.index')->with('success', 'Decoration dihapus!');
    }

    public function export()
    {
        return Excel::download(new DecorationExport, 'decoration.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new DecorationImport, $request->file('file'));

        return redirect()->route('admin.decoration.index')->with('success', 'Data decoration berhasil diimpor!');
    }

    public function show($id)
    {
        return redirect()->route('admin.decoration.index');
    }

    public function trash()
    {
        $trashedDecorations = Decoration::onlyTrashed()->get();
        return view('admin.decoration.trash', compact('trashedDecorations'));
    }

    public function restore($id)
    {
        $decoration = Decoration::withTrashed()->findOrFail($id);
        $decoration->restore();
        return redirect()->route('admin.decoration.trash')->with('success', 'Decoration berhasil dipulihkan.');
    }

    public function forceDelete($id)
    {
        $decoration = Decoration::withTrashed()->findOrFail($id);
        $decoration->forceDelete();
        return redirect()->route('admin.decoration.trash')->with('success', 'Decoration berhasil dihapus permanen.');
    }

    public function restoreAll()
    {
        Decoration::onlyTrashed()->restore();
        return redirect()->route('admin.decoration.trash')->with('success', 'Semua decoration berhasil direstore.');
    }
}
