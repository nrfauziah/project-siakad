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
                                Data Guru
                            </div>

                            <form action="{{route('simpandataguru')}}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nama_lengkap">Nama Guru</label>
                                        <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="jk" name="jk">Jenis Kelamin</label>
                                        <select class="form-control" name="jk" id="jk"> 
                                            <option value="Perempuan">Perempuan</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="nuptk">NUPTK</label>
                                        <input id="nuptk" type="text" class="form-control" name="nuptk">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="pendidikan">Pendidikan</label>
                                        <input id="pendidikan" type="text" class="form-control" name="pendidikan">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status" name="status">Status</label>
                                    <select class="form-control" name="status" id="status"> 
                                        <option value="Aktif">Aktif</option>
                                        <option value="Non-aktif">Non-aktif</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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