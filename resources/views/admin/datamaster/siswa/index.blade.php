@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Tabel Siswa</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header mt-3">
                            <a href="{{route('tambahdatasiswa')}}"><button class="btn btn-sm btn-info"> [+] Tambah Data </button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>NISN</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>                                                
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $siswas as $key => $siswa )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$siswa->nama_siswa}}</td>
                                            <td>{{$siswa->kelas_id}}</td>
                                            <td><i class='fa fa-{{$siswa->jk == 'Laki-laki' ? "male":"female"}}'></i> {{$siswa->jk == 'Laki-laki' ? "Laki-laki":"Perempuan"}}</td>
                                            <td>{{$siswa->nisn}}</td>
                                            <td>{{$siswa->tmp_lahir}}</td>
                                            <td>{{$siswa->tgl_lahir}}</td>
                                            <td>
                                                <a href="/datasiswa/{{$siswa->id}}/detail"><button class="btn btn-info btn-sm"><i class="fas fa-eye"></i></button></a>
                                                <a href="/datasiswa/{{$siswa->id}}/edit"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                                                <a href="/datasiswa/{{$siswa->id}}/delete"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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