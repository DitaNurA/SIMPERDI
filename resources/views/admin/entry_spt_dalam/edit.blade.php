@extends('layouts.master')
@section('title', 'Edit Surat Tugas')
@section('content')
<div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="nav-icon fas fa-copy"></i> Edit Surat Tugas Dalam Daerah</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Surat Tugas Staff</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_surattugasdalam_edit', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <div class="card-title">Tambah data Surat Tugas</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">

                                <div class="row">
                                    <div class="col">
                                        <label for=""> Nomor Surat Tugas</label>
                                        <input type="text" name="no_surat_tugas" value="{{ $edit->no_surat_tugas }}"
                                            class="form-control" placeholder="Nomor Surat Tugas">
                                        @error('no_surat_tugas')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal" value="{{ $edit->tanggal }}"
                                        class="form-control form-control-sm">
                                    @error('tanggal')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Berangkat</label>
                                    <input type="date" name="tanggal_berangkat" id=""
                                        value="{{ $edit->tanggal_berangkat }}" class="form-control form-control-sm">
                                    @error('tanggal_berangkat')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Kembali</label>
                                    <input type="date" name="tanggal_kembali" id="" value="{{ $edit->tanggal_kembali }}"
                                        class="form-control form-control-sm">
                                    @error('tanggal_kembali')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Alat Angkutan Yang digunakan</label>
                                    <input type="text" name="alat_angkutan" value="{{ $edit->alat_angkutan }}"
                                        class="form-control form-control-sm" list="alat_angkut" />
                                    
                                </div>

                                <div class="form-group">
                                    <label for="">Tempat Berangkat</label>
                                    <input type="text" name="tempat_berangkat" value="{{ $edit->tempat_berangkat }}"
                                        class="form-control form-control-sm"/>
                                    @error('tempat_berangkat')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tempat Tujuan</label>
                                    <input type="text" name="tempat_tujuan" value="{{ $edit->tempat_tujuan }}"
                                        class="form-control form-control-sm"/>
                                    @error('tempat_tujuan')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="">Uraian</label>
                                    <textarea class="form-control" name="uraian" placeholder="Uraian"
                                        id="floatingTextarea">{{ $edit->uraian }}</textarea>
                                    @error('uraian')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for=""> Surat Tugas ini mulai berlaku</label>
                                    <input type="date" name="mulai_berlaku" value="{{ $edit->mulai_berlaku }}"
                                        class="form-control" id="">
                                    @error('mulai_berlaku')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Penandatanganan Dokumen</label>
                                    <select class="form-control" name="tanda_tangan_dokumen_id"
                                        aria-label="Default select example">
                                        <option value="">Pilih Penanda Tangan</option>
                                        @php
                                            $tanda_tangan = DB::table('tanda_tangan_dokumen')->get();
                                        @endphp
                                        @endphp
                                        @foreach ($tanda_tangan as $t)
                                            <option value="{{ $t->id }}">{{ $t->nama_lengkap }}</option>
                                        @endforeach
                                    </select>

                                    <script>
                                        document.getElementsByName('tanda_tangan_dokumen_id')[0].value = {{ $edit->id_dokumen }};
                                    </script>
                                    @error('dokumen')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('kelola_surattugasdalam') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection
