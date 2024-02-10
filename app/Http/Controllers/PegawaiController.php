<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PegawaiController extends Controller
{
    public function indexPegawai()
    {
        $pegawai = Pegawai::all();
        return view('admin.pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('admin.pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'nullable',
            'tanggal_lahir' => 'required',
            'nomor_induk' => 'required',
            'status' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'KK' => 'required',
            'npwp' => 'required',
            'jenis' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan!');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('admin.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'status' => 'required',
            'alamat' => 'required',
        ]);

        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diperbarui!');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus!');
    }
}
