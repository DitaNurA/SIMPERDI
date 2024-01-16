@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <div class="content-wrapper">

        <div class="content-header" style="font-size:12px;">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-users"></i> Data Jabatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Jabatan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->
            <a href="{{ route('jabatan_tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah
                Data</a>

            <div class="card card-primary card-outline" style="width: 100%; font-size:13px;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th>No.</th>
                                    <th>Kode Jabatan</th>
                                    <th>Nama Jabatan</th>
                                    <th style="width: 50px;">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $i)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->kode_jabatan }}</td>
                                        <td>{{ $i->nama_jabatan }}</td>
                                        <td>
                                            <a href="{{ route('jabatan_edit', $i->id) }}"
                                                class="btn btn-block btn-info mb-2" style="width: 70px; height: 23px; font-size:10px;"><i class="fas fa-edit"></i>Edit</a>
                                            <form action="{{ route('jabatan_delete', $i->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-block btn-danger" style="width: 70px; height: 23px; font-size:10px;"> <i class="fas fa-trash"></i>Delete</button>
                                            </form>
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