@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Tabel Kelas</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-divider">
                                Data Kelas
                            </div>

                            <form action="{{route('simpandatakelas')}}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="walas">Wali Kelas</label>
                                        <input id="walas" type="text" class="form-control" name="walas">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="kelas">Kelas</label>
                                        <input id="kelas" type="text" class="form-control" name="kelas">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="jurusan">Jurusan</label>
                                        <input id="jurusan" type="text" class="form-control" name="jurusan">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="jmlh_siswa">Jumlah Siswa</label>
                                        <input id="jmlh_siswa" type="text" class="form-control" name="jmlh_siswa">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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