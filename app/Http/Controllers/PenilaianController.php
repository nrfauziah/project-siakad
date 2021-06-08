<?php

namespace App\Http\Controllers;

use App\Penilaian;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penilaians = Penilaian::all();
        return view('admin/penilaian/kategori',compact('penilaians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penilaians = Penilaian::all();
        return view('admin/penilaian/create',compact('penilaians'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        Penilaian::create([
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);
        
        return redirect('/datapenilaian');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penilaian = Penilaian::find($id);
        return view('admin/penilaian/edit', compact('penilaian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penilaian = \App\Penilaian::find($id);
        $penilaian->update($request->all());
        return redirect('/datapenilaian')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $penilaian = \App\Penilaian::find($id);
        $penilaian->delete();
        return redirect('/datapenilaian')->with('sukses','Data berhasil dihapus');
    }
}
