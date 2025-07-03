<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\CartItems;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cny = Collection::where('category', 'Chinese New Year')->get();
        $ramadhan = Collection::where('category', 'Ramadhan')->get();
        $valentine = Collection::where('category', 'Valentine')->get();
        $christmas = Collection::where('category', 'Christmas')->get();
        $birthday = Collection::where('category', 'Birthday')->get();
        $graduation = Collection::where('category', 'Graduation')->get();

        return view('collections', compact('cny', 'ramadhan', 'valentine', 'christmas', 'birthday', 'graduation'));
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
        $cartItem = new CartItem();
        $cartItem->collection_id = $request->collection_id;
        $cartItem->quantity = $request->quantity;
        $cartItem->price = $request->price;
        $cartItem->total_price = $request->quantity * $request->price;
        $cartItem->save();

        return redirect('#');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = Collection::all();
        return view('detail', compact('detail'));
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
        //
    }
}
