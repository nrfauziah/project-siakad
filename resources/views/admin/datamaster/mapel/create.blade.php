@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Mata Pelajaran</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-divider">
                                Data Mata Pelajaran
                            </div>

                            <form action="{{route('simpandatamapel')}}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="kode_mapel">Kode Mapel</label>
                                    <input id="kode_mapel" type="text" class="form-control" name="kode_mapel">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for="mapel">Mapel</label>
                                    <input id="mapel" type="text" class="form-control" name="mapel">
                                    <div class="invalid-feedback"></div>
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
                                    <a href="{{ route('datamapel') }}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection