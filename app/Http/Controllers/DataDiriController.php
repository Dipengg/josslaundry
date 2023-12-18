<?php

namespace App\Http\Controllers;

use App\Models\DataDiriLaundry;
use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    public function index()
    {
        $datadiri = DataDiriLaundry::all();
        return view('datadiri.index', compact('datadiri'));
    }

    public function create()
    {
        return view('datadiri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'no_hp' => 'required',
        ]);

        $store = DataDiriLaundry::create(['nama_pelanggan' => $request->nama_pelanggan, 'alamat' => $request->alamat, 'jeniskelamin' => $request->jeniskelamin, 'no_hp' => $request->no_hp]);
        return redirect('/datadiri');
    }

    public function show($id)
    {
        $datadiri = DataDiriLaundry::find($id);
        return view('datadiri.show', ['nama_pelanggan' => $datadiri->nama_pelanggan, 'alamat' => $datadiri->alamat, 'jeniskelamin' => $datadiri->jeniskelamin, 'no_hp' => $datadiri->no_hp]);
    }

    public function edit($id)
    {
        $datadiri = DataDiriLaundry::find($id);
        return view('datadiri.edit', ['id_datadiri' => $datadiri->id_datadiri, 'nama_pelanggan' => $datadiri->nama_pelanggan, 'alamat' => $datadiri->alamat, 'jeniskelamin' => $datadiri->jeniskelamin, 'no_hp' => $datadiri->no_hp]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'jeniskelamin' => 'required',
            'no_hp' => 'required',
        ]);

        $update = DataDiriLaundry::where('id_datadiri', $request->id_datadiri)->update(['nama_pelanggan' => $request->nama_pelanggan, 'alamat' => $request->alamat, 'jeniskelamin' => $request->jeniskelamin, 'no_hp' => $request->no_hp]);
        return redirect('/datadiri');
    }

    public function destroy($id)
    {
        $datadiri = DataDiriLaundry::findOrFail($id);
        $datadiri->delete();
        return redirect('/datadiri');
    }
}
