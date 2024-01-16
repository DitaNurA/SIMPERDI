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

            <form action="{{ route('proses_detail_dalam_tambah', $surat_dalam->id) }}" method="POST">
                @csrf
                <div class="card card-primary card-outline">
                <div class="card-header">
                    <label for="no_surattugas" class="col-sm-2 col-form-label">Nomor Surat Tugas</label>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="row mt-2 mb-2">
                                    <div class="col">
                                        <label for=""> Nomor SPPD</label>
                                        <input type="text" name="no_sppd[]" class="form-control"
                                            placeholder="Nomor SPPD">
                                        @if(Session("no_sppd") !== null)
                                            <div class="alert alert-danger mt-2">{{ Session("no_sppd") }}</div>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <input type="hidden" name="surat_tugas_dalam_id" value="{{ $surat_dalam->id }}">
                                        <label for="1" class="form-label">Pegawai </label>
                                        <select class="form-control" name="nip[]" aria-label="Default select example">
                                            <option value="">Pilih Pegawai</option>
                                            @foreach ($pegawai as $item)
                                                <option value="{{ $item->nip }}">{{ $item->nama_lengkap }}</option>
                                            @endforeach
                                        </select>
                                         @if(Session("nip") !== null)
                                            <div class="alert alert-danger mt-2">{{ Session("nip") }}</div>
                                        @endif
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="text-white">Add</label><br>
                                            <button type="button" class="btn btn-success" id="tambah-nip"><i
                                                    class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 add-nip">
                            <!--  -->
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('kelola_surattugasdalam') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>

    <script src="{{ url('assets') }}/plugins/jquery/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            var unik = 1;

            $('#tambah-nip').click(function(e) {
                e.preventDefault();
                $('.add-nip').append(`<div class="row" id="remove-field-${unik}">
                        <div class="col">
                            <label for=""> Nomor SPPD</label>
                            <input type="text" name="no_sppd" class="form-control" placeholder="Nomor SPPD">
                                @error('no_sppd')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="col">
                            <label for="1" class="form-label">NIP</label>
                            <select class="form-control" name="nip[]" aria-label="Default select example">
                                        <option selected>Pilih Pegawai</option>
                                        @foreach ($pegawai as $item)
                                            <option value="{{ $item->nip }}">{{ $item->nama_lengkap }}</option>
                                        @endforeach
                                    </select>

                        </div>
                        <div class="col" id="remove-button-${unik}">
                            <div class="form-group">
                                <label for="" class="text-white">Add</label><br>
                                <button type="button" class="btn btn-danger" onclick="removeElement(${unik})"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>`);
                unik++;
            });
        });

        function removeElement(unik) {
            $('#remove-field-' + unik).remove()
            $('#remove-button-' + unik).remove()
        }

    </script>

@endsection
