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
                        

                        <div class="col-md-6">
                            <div class="card-body mt-5 ml-5">
                                <div class="table" style="margin-left: 240px;">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <td>Nama Siswa</td>
                                                <td>:</td>
                                                <td>{{$siswa->nama_lengkap}}</td>
                                            </tr>
                                            <tr>
                                                <td>Kelas</td>
                                                <td>:</td>
                                                <td>{{$siswa->kelas_id}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>{{$siswa->jk}}</td>
                                            </tr>
                                            <tr>
                                                <td>NISN</td>
                                                <td>:</td>
                                                <td>{{$siswa->nisn}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir</td>
                                                <td>:</td>
                                                <td>{{$siswa->tmp_lahir}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td>:</td>
                                                <td>{{$siswa->tgl_lahir}}</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <img alt="image" src="{{ asset('dist/img/user.png') }}" width="200px" class="img img-responsive ml-4" style="margin-top: -270px;">
                            </div>

                            <div class="col-md-12 mb-5" style="margin-left: 750px;">
                                <div class="form-group mb-4">
                                    <a href="/datasiswa/{{$siswa->id}}/edit" class="btn btn-info">Edit</a>
                                    <a href="{{ route('datasiswa') }}" class="btn btn-warning">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection