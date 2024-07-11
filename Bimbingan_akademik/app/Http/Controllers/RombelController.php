<?php

namespace App\Http\Controllers;

use App\Models\Rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_rombel = Rombel::all();
        return view('rombel.index', compact('list_rombel'));
    }

    
    public function create()
    {
        return view('rombel.create');
    }

   
    public function store(Request $request)
    {
        
        $request->validate([
            'nama'        => 'required|string',
            'thn_masuk'   => 'required|string',
        ]);

        Rombel::create([
            'nama'        => $request->nama,
            'thn_masuk'   => $request->thn_masuk,
        ]);

        return redirect()->route('rombels.index')->with('success', 'Rombel successfully Added.');
    }

  
    public function show(Rombel $rombel)
    {
        return view('rombel.show', compact('rombel'));
    }


    public function edit(Rombel $rombel)
    {
        return view('rombel.edit', compact('rombel'));
    }


    public function update(Request $request, Rombel $rombel)
    {
        $rombel->update($request->all());

        return redirect()->route('rombels.index')->with('success', 'Rombongan Belajar updated successfully');
    }


    public function destroy(Rombel $rombel)
    {
        $rombel->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('rombels.index')->with('success', 'Rombongan Belajar successfully');
    }
}
