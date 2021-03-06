<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Siswa;

class KelasController extends Controller
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
        $kelas = Kelas::all();
        return view('admin/datamaster/kelas/index',compact('kelas'));
    }

    public function create(){
        $kelas = Kelas::all();
        return view('admin/datamaster/kelas/create',compact('kelas'));

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kode' => 'required',
            'walas' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        Kelas::create([
            'kode' => $request->kode,
            'walas' => $request->walas,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
        ]);
        
        return redirect('/datakelas');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('admin/datamaster/kelas/edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $kelas = \App\Kelas::find($id);
        $kelas->update($request->all());
        return redirect('/datakelas')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $kelas = \App\Kelas::find($id);
        $kelas->delete();
        return redirect('/datakelas')->with('sukses','Data berhasil dihapus');
    }
}

