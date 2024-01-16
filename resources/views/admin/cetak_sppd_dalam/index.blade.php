@extends('layouts.master')
@section('title', 'Surat SPPD')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-users"></i> Cetak SPPD Dalam Daerah</h1>

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Surat SPPD</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title">Cetak Surat SPPD</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 200px;">#</th>
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
                                            <a href="{{ route('cetak_surat_staf_dalam', $i->id) }}"
                                                class="btn btn-sm btn-success mb-2 btn-block" target="blank"><i
                                                    class="fas fa-print"></i>
                                                Surat SPPD</a>
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
