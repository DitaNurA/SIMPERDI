@extends('layouts.master')
@section('title', 'SPJ')
@section('content')
<div class="content-wrapper">

        <div class="content-header" style="font-size:12px;">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-size:12px;">

                        <h1><i class="fas fa-copy"></i> Entry SPJ Dalam Daerah</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->
            <a href="{{ route('spj_dalam_tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i>
                Tambah
                Data</a>

            <div class="card card-primary card-outline" style="font-size:12px;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 180px;">#</th>
                                    <th>No.</th>
                                    <th>No SPPD</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal</th>
                                    <th>Tanggal Berangkat</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Uraian</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $i)
                                    <tr>
                                    <td style="width: 100px;">
                                    <a href="{{ route('spj_dalam_edit', $i->id) }}"
                                        class="btn btn-block btn-info mb-2" style="width: 100px; height: 23px; font-size:10px;"><i class="fas fa-edit"></i>Edit</a>
                                    <form action="{{ route('spj_dalam_delete', $i->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-block btn-danger" style="width: 100px; height: 23px; font-size:10px;"> <i class="fas fa-trash">
                                            </i>Delete</button>
                                    </form>
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->no_sppd }}</td>
                                        <td>{{ $i->nama_lengkap }}</td>
                                        <td>{{ $i->tanggal }}</td>
                                        <td>{{ $i->tanggal_berangkat }}</td>
                                        <td>{{ $i->tanggal_kembali }}</td>
                                        <td>{{ $i->uraian }}</td>
                                        <td>{{ $i->jumlah }}</td>
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

    <script>
        function lala() {
            $('#exampleModal').modal('show')
        }

    </script>

@endsection
