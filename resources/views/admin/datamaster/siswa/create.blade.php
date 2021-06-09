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
                        <div class="card-body">
                            <div class="form-divider">
                                Data Siswa
                            </div>

                            <form action="{{route('simpandatasiswa')}}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nama_lengkap">Nama Siswa</label>
                                        <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="kelas_id">Kelas</label>
                                        <input id="kelas_id" type="text" class="form-control" name="kelas_id">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="jk" name="jk">Jenis Kelamin</label>
                                        <select class="form-control" name="jk" id="jk"> 
                                            <option value="Perempuan">Perempuan</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="nisn">NISN</label>
                                        <input id="nisn" type="text" class="form-control" name="nisn">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="tmp_lahir">Tempat Lahir</label>
                                        <input id="tmp_lahir" type="text" class="form-control" name="tmp_lahir">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('datasiswa') }}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection