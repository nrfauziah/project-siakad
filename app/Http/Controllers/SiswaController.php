<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

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
        return view('siswa',compact('siswas'));
    }

    public function create(){
        $siswas = Siswa::all();

        return view('createsiswa',compact('siswas'));

    }
}
