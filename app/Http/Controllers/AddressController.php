<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{

    public function search(Request $request){
        $address = Address::where('label', 'like %', $request->addressSearch.'%')->get();

        return view('coba', compact('address'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Address::create([
            'user_id' => Auth::user()->id,
            'label' => $request->input('label'),
            'provinsi' => $request->input('provinsi'),
            'kota_kabupaten' => $request->input('kota_kabupaten'),
            'kecamatan' => $request->input('kecamatan'),
            'kelurahan_desa' => $request->input('kelurahan_desa'),
            'rt' => $request->input('rt'),
            'rw' => $request->input('rw'),
            'kode_pos' => $request->input('kode_pos'),
            'address' => $request->input('address'),
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $address = Address::findOrFail($id);

        $address->delete();

        return redirect()->route('user.index');
    }
}
