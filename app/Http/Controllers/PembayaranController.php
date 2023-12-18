<?php

namespace App\Http\Controllers;

use App\Models\PembayaranLaundry;
use App\Models\Laundry;
use App\Models\DataDiriLaundry;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = PembayaranLaundry::all();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $laundry = Laundry::all();
        return view('pembayaran.create', compact('laundry'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_laundry' => 'required',
            'nominal' => 'required',
        ]);

        $store = PembayaranLaundry::create(['id_laundry' => $request->id_laundry, 'nominal' => $request->nominal]);
        return redirect('/pembayaran');
    }

    public function show($id)
    {
        $pembayaran = PembayaranLaundry::find($id);
        return view('pembayaran.show', ['id_laundry' => $pembayaran->id_laundry, 'nominal' => $pembayaran->nominal, 'created_at' => $pembayaran->created_at]);
    }

    public function edit($id)
    {
        $pembayaran = PembayaranLaundry::find($id);
        return view('pembayaran.edit', ['id_pembayaran' => $pembayaran->id_pembayaran, 'id_laundry' => $pembayaran->id_laundry, 'nominal' => $pembayaran->nominal]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nominal' => 'required',
        ]);

        $update = PembayaranLaundry::where('id_pembayaran', $request->id_pembayaran)->update(['nominal' => $request->nominal]);
        return redirect('/pembayaran');
    }

    public function destroy($id)
    {
        $pembayaran = PembayaranLaundry::findOrFail($id);
        $pembayaran->delete();
        return redirect('/pembayaran');
    }
}
