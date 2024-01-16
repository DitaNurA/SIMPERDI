@extends('layouts.master')
@section('title', 'cetak Rincian Sppd')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h1><i class="fas fa-users"></i> Cetak Rincian SPPD Luar Daerah</h1>

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

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="card-title">Cetak Rincian SPPD</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 200px;">#</th>
                                    <th>No.</th>
                                    <th>No. SPPD</th>
                                    <th>Nama Pegawai</th>
                                    <th>NIP</th>
                                    <th>Tanggal</th>
                                    <th>Tanggal Berangkat</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Selama</th>
                                    <th>Keperluan</th>
                                    <th>Jumlah</th>
                                    <th>Nomor Rekening</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $i)
                                    <tr>
                                        <td>
                                            <a href="{{ route('rincian_sppd_cetak2', $i->id) }}"
                                                class="btn btn-sm btn-success mb-2 btn-block" target="blank"><i
                                                    class="fas fa-print"></i>
                                                cetak Rincian SPPD</a>
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->no_sppd }}</td>
                                        <td>{{ $i->nama_lengkap }}</td>
                                        <td>{{ $i->nip }}</td>
                                        <td>{{ $i->tanggal }}</td>
                                        <td>{{ $i->tanggal_berangkat }}</td>
                                        <td>{{ $i->tanggal_kembali }}</td>
                                        <td>{{ $i->selama }}</td>
                                        <td>{{ $i->keperluan }}</td>
                                        <td>{{ $i->total_perjalanan_dinas }}</td>
                                        <td>{{ $i->kode_rekening }}</td>
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
