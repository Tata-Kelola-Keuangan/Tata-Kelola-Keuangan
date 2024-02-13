<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('admin.pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        $users = User::all();
        $units = Unit::all();
        return view('admin.pegawai.create', compact('users', 'units'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'nullable',
            'tgl_lahir' => 'required',
            'nomor_induk' => 'required',
            'status' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'jenis' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('admin.pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan!');
    }

    public function edit(Pegawai $pegawai)
    {
        $users = User::all();
        $units = Unit::all();
    return view('admin.pegawai.edit', compact('pegawai', 'units', 'users'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'status' => 'required',
            'alamat' => 'required',
        ]);

        $pegawai->update($request->all());

        return redirect()->route('admin.pegawai.index')->with('success', 'Data pegawai berhasil diperbarui!');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('admin.pegawai.index')->with('success', 'Data pegawai berhasil dihapus!');
    }
}
