<?php

namespace App\Http\Controllers\Admin;

use App\Models\Collection;
use App\Exports\CollectionExport;
use App\Imports\CollectionImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::with(['snack1', 'snack2', 'snack3', 'snack4'])->get();
        return view('admin.collection.index', compact('collections'));
    }

    public function create()
    {
        return view('admin.collection.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:tower,bouquet',
            'layer' => 'required|integer|between:2,4',
            'snack_id_1' => 'nullable|exists:snacks,id',
            'snack_id_2' => 'nullable|exists:snacks,id',
            'snack_id_3' => 'nullable|exists:snacks,id',
            'snack_id_4' => 'nullable|exists:snacks,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        Collection::create($validated);
        return redirect()->route('admin.collection.index')->with('success', 'Collection berhasil ditambahkan!');
    }

    public function edit(Collection $collection)
    {
        return view('admin.collection.edit', compact('collection'));
    }

    public function update(Request $request, Collection $collection)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:tower,bouquet',
            'layer' => 'required|integer|between:2,4',
            'snack_id_1' => 'nullable|exists:snacks,id',
            'snack_id_2' => 'nullable|exists:snacks,id',
            'snack_id_3' => 'nullable|exists:snacks,id',
            'snack_id_4' => 'nullable|exists:snacks,id',
            'price' => 'required|numeric',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $collection->update($validated);
        return redirect()->route('admin.collection.index')->with('success', 'Collection berhasil diperbarui!');
    }

    public function destroy(Collection $collection)
    {
        $collection->delete();
        return redirect()->route('admin.collection.index')->with('success', 'Collection berhasil dihapus!');
    }

    public function export()
    {
        return Excel::download(new CollectionExport, 'collection.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new CollectionImport, $request->file('file'));
        return redirect()->route('admin.collection.index')->with('success', 'Data collection berhasil diimpor!');
    }

    public function trash()
    {
        $trashedCollections = Collection::onlyTrashed()->get();
        return view('admin.collection.trash', compact('trashedCollections'));
    }

    public function restore($id)
    {
        $collection = Collection::withTrashed()->findOrFail($id);
        $collection->restore();
        return redirect()->route('admin.collection.trash')->with('success', 'Collection berhasil dipulihkan.');
    }

    public function restoreAll()
    {
        Collection::onlyTrashed()->restore();
        return redirect()->route('admin.collection.trash')->with('success', 'Semua collection berhasil direstore.');
    }

    public function forceDelete($id)
    {
        $collection = Collection::withTrashed()->findOrFail($id);
        $collection->forceDelete();
        return redirect()->route('admin.collection.trash')->with('success', 'Collection berhasil dihapus permanen.');
    }

    public function show($id)
    {
        return redirect()->route('admin.collection.index');
    }
}
