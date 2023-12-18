<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\DataDiriLaundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function index()
    {
        $laundry = Laundry::all();
        return view('laundry.index', compact('laundry'));
    }

    public function create()
    {
        return view('laundry.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelanggan' => 'required',
            'pilihjasa' => 'required',
            'pembayaran' => 'required',
            'berat' => 'required',
        ]);

        $store = Laundry::create(['nama_pelanggan' => $request->nama_pelanggan, 'pilihjasa' => $request->pilihjasa, 'pembayaran' => $request->pembayaran, 'berat' => $request->berat]);
        return redirect('/laundry');
    }

    public function show($id)
    {
        $laundry = Laundry::find($id);
        return view('laundry.show', ['nama_pelanggan' => $laundry->nama_pelanggan, 'pilihjasa' => $laundry->pilihjasa, 'pembayaran' => $laundry->pembayaran, 'berat'=> $laundry->berat]);
    }

    public function edit($id)
    {
        $laundry = Laundry::find($id);
        return view('laundry.edit', ['id_laundry' => $laundry->id_laundry, 'nama_pelanggan' => $laundry->nama_pelanggan, 'pilihjasa' => $laundry->pilihjasa, 'pembayaran' => $laundry->pembayaran, 'berat'=> $laundry->berat]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama_pelanggan' => 'required',
            'pilihjasa' => 'required',
            'pembayaran' => 'required',
            'berat' => 'required',
        ]);

        $update = Laundry::where('id_laundry', $request->id_laundry)->update(['nama_pelanggan' => $request->nama_pelanggan, 'pilihjasa' => $request->pilihjasa, 'pembayaran' => $request->pembayaran, 'berat' => $request->berat]);
        return redirect('/laundry');
    }

    public function destroy($id)
    {
        $laundry = Laundry::findOrFail($id);
        $laundry->delete();
        return redirect('/laundry');
    }
}
