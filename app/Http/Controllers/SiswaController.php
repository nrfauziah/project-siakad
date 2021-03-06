<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('admin/datamaster/siswa/index',compact('siswas'));
    }

    public function create(){
        $siswas = Siswa::all();
        return view('admin/datamaster/siswa/create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_siswa' => 'required',
            'kelas_id' => 'required',
            'jk' => 'required',
            'nisn' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
        ]);

        Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'kelas_id' => $request->kelas_id,
            'jk' => $request->jk,
            'nisn' => $request->nisn,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
        
        return redirect('/datasiswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('admin/datamaster/siswa/edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswas = \App\Siswa::find($id);
        $siswas->update($request->all());
        return redirect('/datasiswa')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $siswas = \App\Siswa::find($id);
        $siswas->delete();
        return redirect('/datasiswa')->with('sukses','Data berhasil dihapus');
    }

    public function detail($id)
    {
        $siswa = Siswa::find($id);
        return view('admin/datamaster/siswa/detail', compact('siswa'));
    }
}
