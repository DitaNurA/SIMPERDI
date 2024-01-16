@extends('layouts.master')
@section('title', 'Surat Tugas')
@section('content')
<div class="content-wrapper">

        <div class="content-header" style="font-size:12px;">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-size:12px;">

                        <h1><i class="fas fa-copy"></i> Entry Surat Tugas Dalam Daerah</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Surat Tugas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->
            <a href="{{ route('surattugasdalam_tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i>
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
                                    <th>No Surat Tugas</th>
                                    <th>Tanggal</th>
                                    <th>Tanggal Berangkat</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Selama</th>
                                    <th>Alat Angkutan</th>
                                    <th>Tempat Berangkat</th>
                                    <th>Tempat Tujuan</th>
                                    <th>Uraian</th>
                                    <th>Mulai Berlaku</th>
                                    <th>Tanda Tangan Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $i)
                                    <tr>
                                        <td>
                                            <div style="display: flex;">
                                                <a href="{{ route('detail_surat_dalam', $i->id) }}" onclick="lala();"
                                                    class="btn btn-sm btn-info mb-2 "  style="width: 70px; height: 50px; font-size:10px;"><i class="fas fa-eye"></i>
                                                    Lihat Pegawai</a>
                                            </div>

                                            <div style="display: flex;">
                                                <a href="{{ route('surattugasdalam_edit', $i->id) }}"
                                                    class="btn btn-sm btn-warning mb-2"  style="width: 70px; height: 23px; font-size:10px;"><i class="fas fa-edit"></i>Edit</a>
                                            </div>
                                            <div style="display: flex;">
                                            <form action="{{ route('surattugasdalam_hapus', $i->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger"  style="width: 70px; height: 23px; font-size:10px;"> <i class="fas fa-trash">
                                                        </i>Delete</button>
                                                </form>
                                        </div>
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->no_surat_tugas }}</td>
                                        <td>{{ $i->tanggal }}</td>
                                        <td>{{ $i->tanggal_berangkat }}</td>
                                        <td>{{ $i->tanggal_kembali }}</td>
                                        <td>{{ $i->selama }}</td>
                                        <td>{{ $i->alat_angkutan }}</td>
                                        <td>{{ $i->tempat_berangkat }}</td>
                                        <td>{{ $i->tempat_tujuan }}</td>
                                        <td>{{ $i->uraian }}</td>
                                        <td>{{ $i->mulai_berlaku }}</td>
                                        <td>{{ $i->nm_lengkap }}</td>
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
