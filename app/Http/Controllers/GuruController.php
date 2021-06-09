<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::all();
        return view('admin/datamaster/guru/index',compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $gurus = Guru::all();
        return view('admin/datamaster/guru/create',compact('gurus'));
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
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'nuptk' => 'required',
            'pendidikan' => 'required',
            'status' => 'required',
        ]);

        Guru::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jk' => $request->jk,
            'nuptk' => $request->nuptk,
            'pendidikan' => $request->pendidikan,
            'status' => $request->status,
        ]);
        
        return redirect('/dataguru');
    }

    public function edit($id)
    {
        $gurus = Guru::find($id);
        return view('admin/datamaster/guru/edit', compact('gurus'));
    }

    public function update(Request $request, $id)
    {
        $gurus = \App\Guru::find($id);
        $gurus->update($request->all());
        return redirect('/dataguru')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $gurus = \App\Guru::find($id);
        $gurus->delete();
        return redirect('/dataguru')->with('sukses','Data berhasil dihapus');
    }
}
