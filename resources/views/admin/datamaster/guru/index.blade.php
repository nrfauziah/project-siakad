@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Tabel Guru</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header mt-3">
                            <a href="{{route('tambahdataguru')}}"><button class="btn btn-sm btn-info">[+] Tambah Data </button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Guru</th>
                                            <th>Jenis Kelamin</th>
                                            <th>NUPTK</th>
                                            <th>Pendidikan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $gurus as $key => $guru )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$guru->nama_lengkap}}</td>
                                            <td><i class='fa fa-{{$guru->jk == 'Laki-laki' ? "male":"female"}}'></i> {{$guru->jk == 'Laki-laki' ? "Laki-laki":"Perempuan"}}</td>
                                            <td>{{$guru->nuptk}}</td>
                                            <td>{{$guru->pendidikan}}</td>
                                            <td>{{$guru->status}}</td>
                                            <td>
                                                <a href="/dataguru/{{$guru->id}}/edit"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                                                <a href="/dataguru/{{$guru->id}}/delete"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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