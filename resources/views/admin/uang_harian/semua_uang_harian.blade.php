@extends('layouts.master')
@section('title', 'Uang Harian')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-money-bill-wave ml-1 mr-1"></i> Kelola Data Uang Harian</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Uang Harian</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title">Uang Harian Dalam</div>
                </div>
                <div class="card-body" style="font-size:12px;">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Provinsi</th>
                                    <th>Uang Harian Dalam</th>
                                    <th>Pendidikan dan Pelatihan</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uang_dalam as $i)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->provinsi }}</td>
                                        <td>{{ number_format($i->dalam_daerah) }}</td>
                                        <td>{{ number_format($i->pendidikan_pelatihan) }}</td>
                                        <td>
                                            <a href="{{ route('uang_dalam', $i->id) }}"
                                                class="btn btn-block btn-info mb-2"><i class="fas fa-edit"></i>
                                                Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <!-- Default box -->

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title">Uang Harian Keluar</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Provinsi</th>
                                    <th>Uang Harian Luar Daerah</th>
                                    <th>Pendidikan dan Pelatihan</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uang_luar as $t)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $t->provinsi }}</td>
                                        <td>{{ number_format($t->luar_daerah) }}</td>
                                        <td>{{ number_format($t->pendidikan_pelatihan) }}</td>
                                        <td>
                                            <a href="{{ route('uang_luar', $t->id) }}"
                                                class="btn btn-block btn-info mb-2"><i class="fas fa-edit"></i>
                                                Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
