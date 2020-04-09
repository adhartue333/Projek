<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LayananController extends Controller
{
    public function index()
    {
        $data_layanan = \App\Layanan::all();
        return view('layanan.index',['data_layanan' => $data_layanan]);
    }
    public function create()
    {
        return view('layanan.tambahlayanan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric', 
        ]);

        Layanan::create([
            'id' => $request->id,
            'nama_layanan' => $request->nama_layanan,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'gambar' => $request->gambar,
            'nama_dokter' => $request->nama_dokter,
            'spesialis' => $request->spesialis,
            'status_pelayanan' => $request->status_pelayanan,
        ]);

        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id)
    {
       
    }

    public function update(Request $request, Siswa $siswa)
    {
        
       
    }

    public function destroy(Siswa $id)
    {
        
    }
}
