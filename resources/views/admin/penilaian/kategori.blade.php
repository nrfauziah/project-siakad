@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Tabel Penilaian</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header mt-3">
                            <a href="{{route('tambahdatapenilaian')}}"><button class="btn btn-sm btn-info"> [+] Tambah Data </button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $penilaians as $key => $penilaian )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$penilaian->kategori}}</td>
                                            <td>{{$penilaian->deskripsi}}</td>
                                            <td>
                                                <a href="/datapenilaian/{{$penilaian->id}}/edit"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                                                <a href="/datapenilaian/{{$penilaian->id}}/delete"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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