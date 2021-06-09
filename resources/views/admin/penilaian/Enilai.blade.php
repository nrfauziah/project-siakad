@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Entry Penilaian</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="ctr" rowspan="2">No</th>
                                            <th class="ctr" rowspan="2">Nama Siswa</th>
                                            <th class="ctr" colspan="3">Pengetahuan</th>
                                            <th class="ctr" colspan="3">Keterampilan</th>                                              
                                            <th class="ctr" rowspan="2">Action</th>
                                        </tr>
                                        <tr>
                                            <th class="ctr">Angka</th>
                                            <th class="ctr">Predikat</th>
                                            <th class="ctr">Deskripsi</th>
                                            <th class="ctr">Angka</th>
                                            <th class="ctr">Predikat</th>
                                            <th class="ctr">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $enilais as $key => $nilai )
                                        <tr>
                                            <td class="text-center">{{$key+1}}</td>
                                            <td class="text-center">{{$nilai->nama_siswa}}</td>
                                            <td class="text-center">{{$nilai->p_angka}}</td>
                                            <td class="text-center">{{$nilai->p_predikat}}</td>
                                            <td>{{$nilai->p_deskripsi}}</td>
                                            <td class="text-center">{{$nilai->k_angka}}</td>
                                            <td class="text-center">{{$nilai->k_predikat}}</td>
                                            <td>{{$nilai->k_deskripsi}}</td>
                                            <td>
                                                <a href="/entrynilai/{{$nilai->id}}/edit"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
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