@extends('layouts.master')
@section('title', 'Tambah Pegawai Surat')
@section('content')

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-users"></i> Tambah Pegawai Surat Tugas Dalam Daerah</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Surat Tugas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->
                @csrf
                @php
                    $surattugasdalam = DB::table('surat_tugas_dalam')->get();
                @endphp
                
                <div class="card card-primary card-outline">
                    <div class="card-header">
                    <label for="no_surattugas" class="col-sm-2 col-form-label">Nomor Surat Tugas</label>
                        <div class="col-sm-5">
                        <select class="form-control" name="no_surattugas" id="no_surattugas" required>
                        <option value="">Pilih Nomor Surat Tugas</option>
                        @foreach($surattugasdalam as $s)
                                <option value="{{ $s->no_surat_tugas }}">{{ $s->no_surat_tugas }}</option>
                        </select>
                        </div>
                            @error('no_surattugas')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    <div class="card-footer">
                        <a href="{{ route('detail_dalam_tambah', $s->id) }}" class="btn btn-warning">Next</a>
                    </div>
                    @endforeach
                </div>
                
        </section>
        <!-- /.content -->
    </div>

@endsection
