<?php

namespace App\Http\Controllers\admin;

use App\Models\Snack;
use App\Models\Customize;
use App\Models\Decoration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// bagian ini gw belum terlalu paham semuanya, intinya buat ngirim data snack
// sama decoration ke view, trus buat validasi inputan

class CustomizeController extends Controller
{
    public function index() {
        return view('customize.index', [
            'customizes' => Customize::with(['snacks', 'decorations'])->get()
        ]);
    }

    public function create() {
        return view('customize.create', [
            'snacks' => Snack::all(),
            'decorations' => Decoration::all()
        ]);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required', 'type' => 'required', 'price' => 'required|numeric',
            'image' => 'nullable|string', 'layer' => 'required|in:2,3,4',
            'snack_id_1' => 'nullable|exists:snacks,id',
            'snack_id_2' => 'nullable|exists:snacks,id',
            'snack_id_3' => 'nullable|exists:snacks,id',
            'snack_id_4' => 'nullable|exists:snacks,id',
            'decoration_id_1' => 'nullable|exists:decorations,id',
            'decoration_id_2' => 'nullable|exists:decorations,id'
        ]);

        $customize = Customize::create($data);

        // pivot table input (optional, jika pakai dynamic snack/decor)
        if ($request->snacks) {
            foreach ($request->snacks as $snackId => $qty) {
                $customize->snacks()->attach($snackId, ['quantity' => $qty]);
            }
        }

        if ($request->decorations) {
            $customize->decorations()->attach($request->decorations);
        }

        return redirect()->route('customize.index');
    }
}

