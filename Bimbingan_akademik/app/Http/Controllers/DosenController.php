<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_dosen = Dosen::all();
        return view('dosen.index', compact('list_dosen'));
    }

    
    public function create()
    {
        return view('dosen.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string',
            'prodi_id' => 'required|string',
        ]);

        Dosen::create([
            'nidn'      => $request->nidn,
            'nama'      => $request->nama,
            'tmp_lahir' => $request-> tmp_lahir,
            'tgl_lahir' => $request-> tgl_lahir,
            'gender'    => $request-> gender,
            'prodi_id' => $request-> prodi_id,
        ]);

        return redirect()->route('dosens.index')->with('success', 'Dosen successfully Added.');
    }

    
    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }

    
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    
    public function update(Request $request, Dosen $dosen)
    {
        $dosen->update($request->all());

        return redirect()->route('dosens.index')->with('success', 'Dosen data successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosens.index')->with('success', 'Dosen data deleted successfully');
    }
}
