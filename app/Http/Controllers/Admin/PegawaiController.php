<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PegawaiController extends Controller
{
    function __construct()
    {
        $this->middleware('role_or_permission:Pegawai access|Pegawai create|Pegawai edit|Pegawai delete', ['only' => ['index', 'show']]);
        $this->middleware('role_or_permission:Pegawai create', ['only' => ['create', 'store']]);
        $this->middleware('role_or_permission:Pegawai edit', ['only' => ['edit', 'update']]);
        $this->middleware('role_or_permission:Pegawai delete', ['only' => ['destroy']]);
    }

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
            'NIK' => 'nullable',
            'tgl_lahir' => 'required',
            'nomor_induk' => 'required',
            'status' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'unit_id' => 'required',
            'KK' => 'required',
            'NPWP' => 'required',
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
        $pegawai->update($request->all());

        $user = $pegawai->user;
        if ($request->hasFile('profile')) {
            $this->validate($request, [
                'profile' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if ($user->profile) {
                $previousProfile = public_path('asset/img/profile/' . $user->profile);
                if (file_exists($previousProfile)) {
                    unlink($previousProfile);
                }
            }

            $image = $request->file('profile');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('asset/img/profile'), $imageName);

            // Update user profile
            $user->profile = $imageName;
            $user->save();
        }

        return redirect()->back()->with('success', 'Data pegawai berhasil diperbarui!');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('admin.pegawai.index')->with('success', 'Data pegawai berhasil dihapus!');
    }
}
