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
                            35
                        </div>
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
                            8
                        </div>
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
                            3
                        </div>
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
                            5
                        </div>
                    </div>
                </div>
            </div>                  
        </div>
    </section>
@endsection