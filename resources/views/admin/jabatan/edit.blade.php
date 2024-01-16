@extends('layouts.master')
@section('title', 'Edit data jabatan')
@section('content')
<div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-users"></i> Data Jabatan</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Jabatan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_jabatan_edit', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">Edit data jabatan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="">Kode Jabatan</label>
                                    <input type="text" name="kode_jabatan" value="{{ $edit->kode_jabatan }}"
                                        class="form-control form-control-sm" required>
                                    @error('kode')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Nama Jabatan</label>
                                    <input type="text" name="nama_jabatan" value="{{ $edit->nama_jabatan }}"
                                        class="form-control form-control-sm" required>
                                    @error('jabatan')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('kelola_jabatan') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection