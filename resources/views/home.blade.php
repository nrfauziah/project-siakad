@extends('layouts.master')

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Dashboard</div>
        </h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>SISWA</h4>
                        </div>
                        <div class="card-body">
                            <h5>2</h5>
                        </div>
                        <a href="{{route('datasiswa')}}" class="small-box-footer">Lihat lengkap <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>GURU</h4>
                        </div>
                        <div class="card-body">
                            <h5>8</h5>
                        </div>
                        <a href="{{route('dataguru')}}" class="small-box-footer">Lihat lengkap <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                    <div class="card-icon bg-warning">
                        <i class="ion ion-paper-airplane"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>KELAS</h4>
                        </div>
                        <div class="card-body">
                            <h5>3</h5>
                        </div>
                        <a href="{{route('datakelas')}}" class="small-box-footer">Lihat lengkap <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-sm-3">
                    <div class="card-icon bg-success">
                        <i class="fas fa-clone"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Mapel</h4>
                        </div>
                        <div class="card-body">
                            <h5>10</h5>
                        </div>
                        <a href="{{route('datamapel')}}" class="small-box-footer">Lihat lengkap <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>                  
        </div>
    </section>
@endsection