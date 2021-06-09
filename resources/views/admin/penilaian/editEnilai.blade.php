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
                                Edit Entry Nilai
                            </div>

                            <form action="/entrynilai/{{$enilais->id}}/update" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="nama_siswa">Nama Siswa</label>
                                    <input id="nama_siswa" type="text" class="form-control" name="nama_siswa" value="{{$enilais->nama_siswa}}">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <p>Pengetahuan</p>
                                        <label for="p_angka">Angka</label>
                                        <input id="p_angka" type="text" class="form-control" name="p_angka" value="{{$enilais->p_angka}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <p>Keterampilan</p>
                                        <label for="k_angka">Angka</label>
                                        <input id="k_angka" type="text" class="form-control" name="k_angka" value="{{$enilais->k_angka}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="p_predikat">Predikat</label>
                                        <input id="p_predikat" type="text" class="form-control" name="p_predikat" value="{{$enilais->p_predikat}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="k_predikat">Predikat</label>
                                        <input id="k_predikat" type="text" class="form-control" name="k_predikat" value="{{$enilais->k_predikat}}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="p_deskripsi">Deskripsi</label>
                                        <input id="p_deskripsi" type="text" class="form-control" name="p_deskripsi" value="{{$enilais->p_deskripsi}}" style="height: 100px">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="k_deskripsi">Deskripsi</label>
                                        <input id="k_deskripsi" type="text" class="form-control" name="k_deskripsi" value="{{$enilais->k_deskripsi}}" style="height: 100px">
                                    </div>
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