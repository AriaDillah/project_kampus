<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_prodi = Prodi::all();
        return view('prodi.index', compact('list_prodi'));
    }

 
    public function create()
    {
        return view('prodi.create');
    }

  
    public function store(Request $request)
    {
            $request->validate([
                'kode' => 'required|string',
                'nama' => 'required|string',
            ]);

            Prodi::create([
                'kode' => $request->kode,
                'nama' => $request->nama,
            ]);

            return redirect()->route('prodis.index')->with('success', 'Prodi successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        
        return view('prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        
        $prodi->update($request->all());

        return redirect()->route('prodis.index')->with('success', 'Program studi updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('prodis.index')->with('success', 'Program Studi deleted successfully');
    
    }
}
