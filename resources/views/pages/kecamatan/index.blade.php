@extends('layouts.admin')

@section('title', 'Kecamatan')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">Dashboard</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Kecamatan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="card shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between">

                        <span>
                            List Kecamatan
                        </span>

                        <a href="" class="btn btn-sm btn-primary">
                            <i class="fas fa-sm fa-plus-circle"></i>
                            Tambah
                        </a>

                    </div>
                </div>
                <div class="card-body">

                </div>
            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
