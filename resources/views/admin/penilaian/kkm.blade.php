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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Kelas</th>
                                            <th>KKM</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $kkms as $key => $kkm )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$kkm->kode_mapel}}</td>
                                            <td>{{$kkm->mapel}}</td>
                                            <td>{{$kkm->kelas}}</td>
                                            <td>{{$kkm->kkm}}</td>
                                            <td>
                                                <a href="/datakkm/{{$kkm->id}}/edit"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
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