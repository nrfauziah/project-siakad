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
                                Edit Data Penilaian
                            </div>

                            <form action="/datapenilaian/{{$penilaian->id}}/update" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="kategori">Kategori</label>
                                        <input id="kategori" type="text" class="form-control" name="kategori" value="{{$penilaian->kategori}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input id="deskripsi" type="text" class="form-control" name="deskripsi" value="{{$penilaian->deskripsi}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('datapenilaian') }}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection