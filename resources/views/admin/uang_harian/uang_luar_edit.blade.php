@extends('layouts.master')
@section('title', 'Uang Harian Luar')
@section('content')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-money-bill-wave ml-1 mr-1"></i> Kelola Uang Harian</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Uang Haran</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_uang_luar', $uang_luar->id) }}" method="POST">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">Edit Uang Harian</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">

                                <div class="form-group">
                                    <label for="">Uang Harian Luar Daerah </label>
                                    <input type="text" name="luar_daerah" value="{{ $uang_luar->luar_daerah }}" id=""
                                        class="form-control form-control-sm" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Pendidikan dan Pelatihan </label>
                                    <input type="text" name="pendidikan_pelatihan" value="{{ $uang_luar->pendidikan_pelatihan }}" id=""
                                        class="form-control form-control-sm" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('uang_harian') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>

@endsection
