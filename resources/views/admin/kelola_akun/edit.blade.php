@extends('layouts.master')
@section('title', 'Edit data akun')
@section('content')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-users"></i> Kelola Akun</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Kelola Akun</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_akun_edit', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">Edit data Akun</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{ $edit->name }}"
                                        class="form-control form-control-sm" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" value="{{ $edit->email }}"
                                        class="form-control form-control-sm" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="" value="{{ $edit->password }}" class="form-control form-control-sm" required>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('kelola_akun') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
