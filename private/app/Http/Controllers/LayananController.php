<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layanan;


class LayananController extends Controller
{
    public function index()
    {
        $data_layanan = Layanan::all();
        return view('layanan.index',['data_layanan' => $data_layanan]);
    }
    public function create()
    {
        return view('layanan.tambahlayanan');
    }

    public function store(Request $request)
    {
        $image = $request->file('gambar')->store('image');

        $input = Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'gambar' => $image,
            'nama_dokter' => $request->nama_dokter,
            'spesialis' => $request->spesialis,
            'status_pelayanan' => $request->status_pelayanan
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
