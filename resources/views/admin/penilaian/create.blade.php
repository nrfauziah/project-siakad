@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Tabel Penialaian</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-divider">
                                Data Kategori Penilaian
                            </div>

                            <form action="{{route('simpandatakategori')}}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="kode_mapel">Kode Mapel</label>
                                    <input id="kode_mapel" type="text" class="form-control" name="kode_mapel">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="mapel">Mata Pelajaran</label>
                                        <input id="mapel" type="text" class="form-control" name="mapel">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="kelas">Kelas</label>
                                        <input id="kelas" type="text" class="form-control" name="kelas">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="predikatA">A</label>
                                    <input id="predikatA" type="text" class="form-control" name="predikatA">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="predikatB">B</label>
                                    <input id="predikatB" type="text" class="form-control" name="predikatB">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="predikatC">C</label>
                                    <input id="predikatC" type="text" class="form-control" name="predikatC">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('datakategori') }}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection