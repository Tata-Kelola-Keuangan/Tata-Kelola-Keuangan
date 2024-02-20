<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perencanaan;
use App\Models\SubPerencanaan;
use App\Models\Unit;

class PerencanaanController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        $perencanaans = Perencanaan::all();
        return view('admin.perencanaan.index', compact('perencanaans', 'units'));
    }


    public function create()
    {
        return view('admin.perencanaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kd_perencanaan' => 'required',
            'sumber' => 'required',
            'revisi' => 'required',
            'unit_id' => 'required|exists:tb_unit,id',
        ]);

        Perencanaan::create($request->all());

        return redirect()->route('admin.perencanaan.index')->with('success', 'Perencanaan created successfully');
    }

    public function edit($id)
    {
        $perencanaan = Perencanaan::findOrFail($id);
        return view('admin.perencanaan.edit', compact('perencanaan'));
    }

    public function update(Request $request, $id)
    {
        $perencanaan = Perencanaan::findOrFail($id);
        $perencanaan->kode_perencanaan = $request->kode_perencanaan;
        $perencanaan->nama_perencanaan = $request->nama_perencanaan;
        // Update other attributes as needed
        $perencanaan->save();

        return redirect()->route('admin.perencanaan.index')->with('success', 'Perencanaan updated successfully');
    }

    public function destroy($id)
    {
        $perencanaan = Perencanaan::findOrFail($id);
        $perencanaan->delete();

        return redirect()->route('admin.perencanaan.index')->with('success', 'Perencanaan deleted successfully');
    }
}
