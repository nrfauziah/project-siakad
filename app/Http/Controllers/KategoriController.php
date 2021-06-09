<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin/penilaian/kategori',compact('kategoris'));
    }

    public function create(){
        $kategoris = Kategori::all();
        return view('admin/penilaian/create',compact('kategoris'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_mapel' => 'required',
            'mapel' => 'required',
            'kelas' => 'required',
            'predikatA' => 'required',
            'predikatB' => 'required',
            'predikatC' => 'required',
        ]);

        Kategori::create([
            'kode_mapel' => $request->kode_mapel,
            'mapel' => $request->mapel,
            'kelas' => $request->kelas,
            'predikatA' => $request->predikatA,
            'predikatB' => $request->predikatB,
            'predikatC' => $request->predikatC,
        ]);
        
        return redirect('/datakategori');
    }

    public function edit($id)
    {
        $kategoris = Kategori::find($id);
        return view('admin/penilaian/editkategori', compact('kategoris'));
    }

    public function update(Request $request, $id)
    {
        $kategoris = \App\Kategori::find($id);
        $kategoris->update($request->all());
        return redirect('/datakategori')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $kategoris = \App\Kategori::find($id);
        $kategoris->delete();
        return redirect('/datakategori')->with('sukses','Data berhasil dihapus');
    }
}
