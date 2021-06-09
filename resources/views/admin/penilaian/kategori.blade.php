@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Kategori Penilaian</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header mt-3">
                            <a href="{{route('tambahdatakategori')}}"><button class="btn btn-sm btn-info">[+] Tambah Data </button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="ctr" rowspan="2">No</th>
                                            <th class="ctr" rowspan="2">Kode</th>
                                            <th class="ctr" rowspan="2">Mata Pelajaran</th>
                                            <th class="ctr" rowspan="2">Kelas</th>             
                                            <th class="ctr" colspan="3">Predikat</th>             
                                            <th class="ctr" rowspan="2">Action</th>
                                        </tr>
                                        <tr>
                                            <th class="ctr">A</th>
                                            <th class="ctr">B</th>
                                            <th class="ctr">C</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $kategoris as $key => $kategori )
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td class="text-center">{{$kategori->kode_mapel}}</td>
                                            <td class="text-center">{{$kategori->mapel}}</td>
                                            <td class="text-center">{{$kategori->kelas}}</td>
                                            <td>{{$kategori->predikatA}}</td>
                                            <td>{{$kategori->predikatB}}</td>
                                            <td>{{$kategori->predikatC}}</td>
                                            <td>
                                                <a href="/datakategori/{{$kategori->id}}/edit"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                                                <a href="/datakategori/{{$kategori->id}}/delete"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection