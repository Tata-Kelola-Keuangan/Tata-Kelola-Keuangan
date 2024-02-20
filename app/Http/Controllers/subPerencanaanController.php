<?php

namespace App\Http\Controllers;

use App\Models\Perencanaan;
use App\Models\SubPerencanaan;
use Illuminate\Http\Request;

class SubPerencanaanController extends Controller
{
    public function index($id)
    {
        $sub_perencanaans = SubPerencanaan::findOrFail($id);
        $perencanaans = Perencanaan::all();
        return view('admin.perencanaan.sub_perencanaan.index', compact('sub_perencanaans', 'perencanaans'));
    }

    public function create()
    {
        // Return a view for creating a new SubPerencanaan
    }

    public function store(Request $request)
    {
        // Validate the request and store the new SubPerencanaan
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

    public function destroy($id)
    {
        // Delete the SubPerencanaan
    }
}
