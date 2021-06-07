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
                                Edit Data Siswa
                            </div>

                            <form action="/datasiswa/{{$siswa->id}}/update" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nama_lengkap">Nama Siswa</label>
                                        <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{$siswa->nama_lengkap}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="kelas_id">Kelas</label>
                                        <input id="kelas_id" type="text" class="form-control" name="kelas_id" value="{{$siswa->kelas_id}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="jk" name="jk">Jenis Kelamin</label>
                                        <select class="form-control" name="jk" id="jk"> 
                                            <option value="Perempuan" @if($siswa->jk == 'Perempuan') selected @endif>Perempuan</option>
                                            <option value="Laki-laki" @if($siswa->jk == 'Laki-laki') selected @endif >Laki-laki</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="nisn">NISN</label>
                                        <input id="nisn" type="text" class="form-control" name="nisn" value="{{$siswa->nisn}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="tmp_lahir">Tempat Lahir</label>
                                        <input id="tmp_lahir" type="text" class="form-control" name="tmp_lahir" value="{{$siswa->tmp_lahir}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{$siswa->tgl_lahir}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
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