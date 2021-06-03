@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Tabel Guru</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-divider">
                                Edit Data Guru
                            </div>

                            <form action="/dataguru/{{$guru->id}}/update" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nama_lengkap">Nama Guru</label>
                                        <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{$guru->nama_lengkap}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="jk" name="jk">Jenis Kelamin</label>
                                        <select class="form-control" name="jk" id="jk"> 
                                            <option value="Perempuan" @if($guru->jk == 'Perempuan') selected @endif>Perempuan</option>
                                            <option value="Laki-laki" @if($guru->jk == 'Laki-laki') selected @endif >Laki-laki</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nuptk">NUPTK</label>
                                        <input id="nuptk" type="text" class="form-control" name="nuptk" value="{{$guru->nuptk}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="pendidikan">Pendidikan</label>
                                        <input id="pendidikan" type="text" class="form-control" name="pendidikan" value="{{$guru->pendidikan}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input id="nis" type="text" class="form-control" name="nis" value="{{$guru->nis}}">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('dataguru') }}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection