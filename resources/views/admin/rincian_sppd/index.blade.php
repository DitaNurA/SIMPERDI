@extends('layouts.master')
@section('title', 'Rincian SPPD')
@section('content')
<div class="content-wrapper">

        <div class="content-header" style="font-size:12px;">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="font-size:12px;">

                        <h1><i class="fas fa-copy"></i> Rincian SPPD Luar Daerah</h1>

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
            <a href="{{ route('rincian_sppd_tambah') }}" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i>
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
                                    <th>Jumlah Pengeluaran Perjalanan Dinas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($index as $i)
                                    <tr>
                                    <td style="width: 100px;">

                                    <a href="{{ route('rincian_sppd_edit', $i->id) }}"
                                        class="btn btn-block btn-info mb-2" style="width: 70px; height: 23px; font-size:10px;"><i class="fas fa-edit"></i>Edit</a>
                                    <p>
                                    <p>
                                        <button type="button" class="btn btn-info" style="width: 70px; height: 23px; font-size:10px;"
                                                id="btnRincianSppd" data-id="{{ $i->id }}" onclick="modalRincianSppd({{ $i->id }})"><i class="fa fa-eye"></i> Detail</button>

                                    <p>
                                        <form action="{{ route('rincian_sppd_delete', $i->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-block btn-danger" style="width: 70px; height: 23px; font-size:10px;"> <i class="fas fa-trash">
                                            </i>Delete</button>
                                    </form>

                            
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $i->no_sppd }}</td>
                                        <td>{{ $i->nama_lengkap }}</td>
                                        <td>{{ $i->tanggal }}</td>
                                        <td>{{ $i->tanggal_berangkat }}</td>
                                        <td>{{ $i->tanggal_kembali }}</td>
                                        <td>{{ $i->keperluan }}</td>
                                        <td>{{ $i->total_perjalanan_dinas }}</td>
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

    @include('admin.modal.rincian_sppd_modal')

<script>
    function modalRincianSppd(id) {
        $("#modalRincianSppd").modal();
        $.ajax({
                type: "GET",
                url: "{{ route('get_rincian_sppd') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                },
                dataType: "JSON",
                success: function (response) {
                let html = `
                    <table class="table table-bordered">
                        <tr>
                            <td>No SPPD</td>
                            <td>${response.no_sppd}</td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>${response.nama_lengkap}</td>
                        </tr>
                        <tr>
                            <td>NIP</td>
                            <td>${response.nip}</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>${response.jabatan}</td>
                        </tr>
                        <tr>
                            <td>Pangkat</td>
                            <td>${response.pangkat}</td>
                        </tr>
                        <tr>
                            <td>Golongan</td>
                            <td>${response.golongan}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Berangkat</td>
                            <td>${response.tanggal_berangkat}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Kembali</td>
                            <td>${response.tanggal_kembali}</td>
                        </tr>
                        <tr>
                            <td>Belanja BBM Kendaraan Dinas</td>
                            <td>${response.belanja_bbm}</td>
                        </tr>
                        <tr>
                            <td>Transport PP</td>
                            <td>${response.transport_pp}</td>
                        </tr>
                        <tr>
                            <td>Uang Harian</td>
                            <td>${response.uang_harian}</td>
                        </tr>
                        <tr>
                            <td>Biaya Bahan Bakar</td>
                            <td>${response.biaya_bahan_bakar}</td>
                        </tr>
                        <tr>
                            <td>Biaya Penginapan</td>
                            <td>${response.biaya_penginapan}</td>
                        </tr>
                        
                        <tr>
                            <td>Keperluan (Keterangan)</td>
                            <td>${response.keperluan}</td>
                        </tr>
                        <tr>
                            <td>Daerah Tujuan</td>
                            <td>${response.daerah_tujuan}</td>
                        </tr>
                        <tr>
                            <td>Instansi Tujuan</td>
                            <td>${response.instansi_tujuan}</td>
                        </tr>

                        <tr>
                            <td>Total Keseluruhan</td>
                            <td>${response.total_perjalanan_dinas}</td>
                        </tr>
                        <tr>
                            <td>Nominal Total Keseluruhan</td>
                            <td>${response.nominal_total}</td>
                        </tr>
                        <tr>
                            <td>Yang Dibayarkan di Awal</td>
                            <td>${response.bayar_awal}</td>
                        </tr>
                        <tr>
                            <td>Sisa Kurang/Lebih</td>
                            <td>${response.sisa}</td>
                        </tr>
                    </table>`
                $("#tableRincianSppd").html(html)
            }
        });
    }
</script>

@endsection
