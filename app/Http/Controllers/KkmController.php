<?php

namespace App\Http\Controllers;

use App\Kkm;
use Illuminate\Http\Request;

class KkmController extends Controller
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

    public function index()
    {
        $kkms = Kkm::all();
        return view('admin/penilaian/kkm',compact('kkms'));
    }

    public function create(){
        $kkms = Kkm::all();
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_mapel' => 'required',
            'mapel' => 'required',
            'kelas' => 'required',
            'kkm' => 'required',
        ]);

        Kkm::create([
            'kode_mapel' => $request->kode_mapel,
            'mapel' => $request->mapel,
            'kelas' => $request->kelas,
            'kkm' => $request->kkm,
        ]);
        
        return redirect('/datakkm');
    }

    public function edit($id)
    {
        $kkms = Kkm::find($id);
        return view('admin/penilaian/editkkm', compact('kkms'));
    }

    public function update(Request $request, $id)
    {
        $kkms = \App\Kkm::find($id);
        $kkms->update($request->all());
        return redirect('/datakkm')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $kkms = \App\Kkm::find($id);
        $kkms->delete();
        return redirect('/datakkm')->with('sukses','Data berhasil dihapus');
    }
}
