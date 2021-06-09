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
                            <div class="form-divider">
                                Edit Kategori Penilaian
                            </div>

                            <form action="/datakategori/{{$kategoris->id}}/update" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="kode_mapel">Kode</label>
                                    <input id="kode_mapel" type="text" class="form-control" name="kode_mapel" value="{{$kategoris->kode_mapel}}">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="mapel">Mata Pelajaran</label>
                                        <input id="mapel" type="text" class="form-control" name="mapel" value="{{$kategoris->mapel}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="kelas">Kelas</label>
                                        <input id="kelas" type="text" class="form-control" name="kelas" value="{{$kategoris->kelas}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="predikatA">A</label>
                                    <input id="predikatA" type="text" class="form-control" name="predikatA" value="{{$kategoris->predikatA}}">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="predikatB">B</label>
                                    <input id="predikatB" type="text" class="form-control" name="predikatB" value="{{$kategoris->predikatB}}">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="predikatC">C</label>
                                    <input id="predikatC" type="text" class="form-control" name="predikatC" value="{{$kategoris->predikatC}}">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('entrynilai') }}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection