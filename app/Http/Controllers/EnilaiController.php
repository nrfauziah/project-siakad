<?php

namespace App\Http\Controllers;

use App\Enilai;
use Illuminate\Http\Request;

class EnilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enilais = Enilai::all();
        return view('admin/penilaian/Enilai',compact('enilais'));
    }

    public function create(){
        $enilais = Enilai::all();
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
            'nama_siswa' => 'required',
            'p_angka' => 'required',
            'p_predikat' => 'required',
            'p_deskripsi' => 'required',
            'k_angka' => 'required',
            'k_predikat' => 'required',
            'k_deskripsi' => 'required',
        ]);

        Enilai::create([
            'nama_siswa' => $request->nama_siswa,
            'p_angka' => $request->p_angka,
            'p_predikat' => $request->p_predikat,
            'p_deskripsi' => $request->p_deskripsi,
            'k_angka' => $request->k_angka,
            'k_predikat' => $request->k_predikat,
            'k_deskripsi' => $request->k_deskripsi,
        ]);
        
        return redirect('/entrynilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enilai  $enilai
     * @return \Illuminate\Http\Response
     */
    public function show(Enilai $enilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enilai  $enilai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enilais = Enilai::find($id);
        return view('admin/penilaian/editEnilai', compact('enilais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enilai  $enilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $enilais = \App\Enilai::find($id);
        $enilais->update($request->all());
        return redirect('/entrynilai')->with('sukses','Data berhasil diupdate');
    }
}
