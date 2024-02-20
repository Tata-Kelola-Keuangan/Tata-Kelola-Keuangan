<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return view('admin.unit.index', compact('units'));
    }

    public function create()
    {
        $units = Unit::all();
        return view('admin.unit.create', compact('units'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'singkatan' => 'required',
        ]);

        // Create a new Unit instance
        $unit = new Unit();
        $unit->nama = $request->name;
        $unit->singkatan = $request->singkatan;
        $unit->save();

        // Redirect back with a success message
        return redirect()->route('admin.unit.index')->with('success', 'Unit created successfully');
    }


    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        return view('admin.unit.edit', compact('unit'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'singkatan' => 'required',
        ]);

        // Find the Unit by ID
        $unit = Unit::findOrFail($id);
        $unit->nama = $request->name;
        $unit->singkatan = $request->singkatan;
        $unit->save();

        // Redirect back with a success message
        return redirect()->route('admin.unit.index')->with('success', 'Unit updated successfully');
    }


    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();

        return redirect()->route('admin.unit.index')->with('success', 'Unit deleted successfully');
    }
}
