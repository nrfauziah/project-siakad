<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Kelas;

class GuruController extends Controller
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
        $guru = Guru::all();
        return view('admin/datamaster/guru/index',compact('guru'));
    }

    public function create(){
        $guru = Guru::all();

        return view('admin/datamaster/guru/create',compact('guru'));

    }

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
        $guru = Guru::find($id);
        return view('admin/datamaster/guru/edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = \App\Guru::find($id);
        $guru->update($request->all());
        return redirect('/dataguru')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $guru = \App\Guru::find($id);
        $guru->delete();
        return redirect('/dataguru')->with('sukses','Data berhasil dihapus');
    }
}
