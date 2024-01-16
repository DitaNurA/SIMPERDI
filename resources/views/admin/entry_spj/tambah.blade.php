@extends('layouts.master')
@section('title', 'Tambah SPJ')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="nav-icon fas fa-copy"></i> Tambah SPJ Luar Daerah</h1>
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

            <form action="{{ route('proses_spj_tambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="" method="POST">
                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <div class="mb-3 row">
                                            <label for="no_sppd" class="col-sm-2 col-form-label">Nomor (SPPD)</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" name="no_sppd" id="no_sppd" required>
                                                    <option value="">Pilih Nomor (SPPD)</option>
                                                    @php
                                                        $sppd = DB::table('rincian_sppd')->get();
                                                    @endphp
                                                    @foreach ($sppd as $t)
                                                        <option value="{{ $t->no_sppd }}">{{ $t->no_sppd }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('no_sppd')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('nama_lengkap')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="nip" class="col-sm-2 col-form-label">Nip</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="nip" id="nip" class="form-control form-control-sm"
                                                    required>
                                            </div>
                                            @error('nip')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="jabatan" id="jabatan"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('jabatan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="">Pangkat</label>
                                                    <input type="text" name="pangkat" id="pangkat"
                                                        class="form-control form-control-sm" required>
                                                    @error('pangkat')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="">Golongan</label>
                                                    <input type="text" name="golongan" id="golongan"
                                                        class="form-control form-control-sm" required>
                                                    @error('golongan')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggal_berangkat" class="col-sm-2 col-form-label">Tgl
                                                Berangkat</label>
                                            <div class="col-sm-5">
                                                <input type="date" name="tanggal_berangkat" id="tanggal_berangkat"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('tanggal_berangkat')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggal_kembali" class="col-sm-2 col-form-label">Tgl Kembali</label>
                                            <div class="col-sm-5">
                                                <input type="date" name="tanggal_kembali" id="tanggal_kembali"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('tanggal_kembali')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="selama" class="col-sm-2 col-form-label">Selama</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="selama" id="selama"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('selama')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="uraian" class="col-sm-2 col-form-label">Uraian</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="uraian" id="uraian"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('uraian')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="kegiatan" id="kegiatan"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('kegiatan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="subkegiatan" class="col-sm-2 col-form-label">Sub-Kegiatan</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="subkegiatan" id="subkegiatan"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('subkegiatan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Pengeluaran</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="jumlah" id="jumlah"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('jumlah')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-5">
                                                <input type="date" name="tanggal" id="tanggal"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('tanggal')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="bulan" id="bulan"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('bulan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="kode_rekening" class="col-sm-2 col-form-label">Nomor Rekening</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="kode_rekening" id="kode_rekening"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('kode_rekening')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                        <a href="{{ route('kelola_spj') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
<!--content-->
    </div>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
$("#no_sppd").change(function(e) {
                let no_sppd = this.value;
                $.ajax({
                    type: "POST",
                    url: "{{ route('cek_sppd') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "no_sppd": no_sppd
                    },
                    dataType: "JSON",
                    success: function(response) {
                        $('#nama_lengkap').val(response.nama_lengkap)
                        $('#nip').val(response.nip)
                        $('#jabatan').val(response.jabatan)
                        $('#pangkat').val(response.pangkat)
                        $('#golongan').val(response.golongan)
                        $('#tanggal_berangkat').val(response.tanggal_berangkat)
                        $('#tanggal_kembali').val(response.tanggal_kembali)
                        $('#selama').val(response.selama)
                        $('#uraian').val(response.keperluan)
                        $('#kode_rekening').val(response.kode_rekening)
                        $('#jumlah').val(response.total_perjalanan_dinas)
                    }
                });
            });

</script>
 @endsection