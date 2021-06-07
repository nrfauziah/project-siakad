<?php

namespace App\Http\Controllers;

use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapels = Mapel::all();
        return view('admin/datamaster/mapel/index',compact('mapels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapels = Mapel::all();
        return view('admin/datamaster/mapel/create',compact('mapels'));
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
            'kode' => 'required',
            'mapel' => 'required',
            'status' => 'required',
        ]);

        Mapel::create([
            'kode' => $request->kode,
            'mapel' => $request->mapel,
            'status' => $request->status,
        ]);
        
        return redirect('/datamapel'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapels = Mapel::find($id);
        return view('admin/datamaster/mapel/edit', compact('mapels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mapels = \App\Mapel::find($id);
        $mapels->update($request->all());
        return redirect('/datamapel')->with('sukses','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $mapels = \App\Mapel::find($id);
        $mapels->delete();
        return redirect('/datamapel')->with('sukses','Data berhasil dihapus');
    }
}
