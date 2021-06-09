@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Tabel Mata Pelajaran</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-divider">
                                Edit Mata Pelajaran
                            </div>

                            <form action="/datamapel/{{$mapels->id}}/update" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="kode_mapel">Kode Mapel</label>
                                    <input id="kode_mapel" type="text" class="form-control" name="kode_mapel" value="{{$mapels->kode_mapel}}">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="mapel">Mata Pelajaran</label>
                                        <input id="mapel" type="text" class="form-control" name="mapel" value="{{$mapels->mapel}}">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="status" name="status">Status</label>
                                        <select class="form-control" name="status" id="status"> 
                                            <option value="Aktif"  {{$mapels->status == 'Aktif' ? 'selected':''}}>Aktif</option>
                                            <option value="Non-aktif"{{$mapels->status == 'Non-aktif' ? 'selected':''}}>Non-Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
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