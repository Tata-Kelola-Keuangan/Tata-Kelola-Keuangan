<?php

namespace App\Http\Controllers;

use App\Models\Perencanaan;
use App\Models\SubPerencanaan;
use App\Models\Pegawai;
use App\Models\PPK;

use Illuminate\Http\Request;

class SubPerencanaanController extends Controller
{
    public function index($id)
    {
        $sub_perencanaans = SubPerencanaan::where('perencanaan_id', $id)->get();
        $perencanaan = Perencanaan::findOrFail($id);
        $pegawai = Pegawai::all();
        $ppk = PPK::all();
        return view('admin.perencanaan.sub_perencanaan.index', compact('sub_perencanaans', 'perencanaan', 'pegawai', 'ppk'));
    }

    public function create()
    {
        // Return a view for creating a new SubPerencanaan
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kegiatan' => 'required|string',
            'satuan' => 'required|string',
            'volume' => 'required|string',
            'harga_satuan' => 'required|numeric',
            'output' => 'required|numeric',
            'rencana_mulai' => 'required|date',
            'rencana_bayar' => 'required|date',
            'perencanaan_id' => 'required|exists:tb_perencanaan,id',
            'pic_id' => 'required|exists:tb_pegawai,id',
            'ppk_id' => 'required|exists:tb_ppk,id',
        ]);

        $validatedData['file_hps'] = $request->file_hps ?? 'default';
        $validatedData['file_kak'] = $request->file_kak ?? 'default';
        SubPerencanaan::create($validatedData);

        return redirect()->route('admin.perencanaan.sub_perencanaan.index', $validatedData['perencanaan_id'])
            ->with('success', 'Sub Perencanaan berhasil ditambahkan.');
    }


    public function show($id)
    {
        $sub_perencanaans = SubPerencanaan::findOrFail($id);
        return view('admin.perencanaan.sub_perencanaan.show', compact('sub_perencanaans'));
    }

    public function edit($id)
    {
        $sub_perencanaans = SubPerencanaan::findOrFail($id);
        return view('admin.perencanaan.sub_perencanaan.edit', compact('sub_perencanaans'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request and update the SubPerencanaan
    }

    public function destroy(SubPerencanaan $sub_perencanaan)
    {
        $perencanaanId = $sub_perencanaan->perencanaan_id;
        $sub_perencanaan->delete();

        return redirect()->route('admin.perencanaan.sub_perencanaan.index', ['id' => $perencanaanId])->with('success', 'Sub Perencanaan berhasil dihapus');
    }
}
