@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Mata Pelajaran</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header mt-3">
                            <a href="{{route('tambahdatamapel')}}"><button class="btn btn-sm btn-info">[+] Tambah Data </button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $mapels as $key => $mapel )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$mapel->kode_mapel}}</td>
                                            <td>{{$mapel->mapel}}</td>
                                            <td>{{$mapel->status}}</td>
                                            <td>
                                                <a href="/datamapel/{{$mapel->id}}/edit"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                                                <a href="/datamapel/{{$mapel->id}}/delete"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                                            </td>
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