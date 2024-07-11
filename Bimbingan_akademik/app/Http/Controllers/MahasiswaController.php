<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('list_mahasiswa'));
    }


    public function create()
    {
        return view('mahasiswa.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string',
            'ipk' => 'required|string',
            'prodi_id' => 'required|string',
            'rombel_id' => 'required|string',
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'ipk' => $request->ipk,
            'prodi_id' => $request->prodi_id,
            'rombel_id' => $request->rombel_id,
        ]);

        return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa successfully Added.');
    }


    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }


    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }


    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa data successfully Updated.');
    }


    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa data deleted successfully');
    }
}
