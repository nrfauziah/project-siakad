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
                                Edit Data Kelas
                            </div>

                            <form action="/datakelas/{{$kelas->id}}/update" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="kode">Kode</label>
                                        <input id="kode" type="text" class="form-control" name="kode" value="{{$kelas->kode}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="walas">Wali Kelas</label>
                                        <input id="walas" type="text" class="form-control" name="walas" value="{{$kelas->walas}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="kelas">Kelas</label>
                                        <input id="kelas" type="text" class="form-control" name="kelas" value="{{$kelas->kelas}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="jurusan">Jurusan</label>
                                        <input id="jurusan" type="text" class="form-control" name="jurusan" value="{{$kelas->jurusan}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('datakelas') }}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection