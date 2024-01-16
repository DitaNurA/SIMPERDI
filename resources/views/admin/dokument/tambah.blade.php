@extends('layouts.master')
@section('title', 'Tambah Penanda Tangan Dokumen')
@section('content')

<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1><i class="nav-icon fas fa-copy"></i> Tambah Penanda Tangan Dokumen</h1>

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Penanda Tangan Dokumen</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <!-- Default box -->

    <form action="{{ route('proses_dokument_tambah') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Nama lengkap</label>
                            <select class="form-control" name="nama_lengkap" aria-label="Default select example">
                                <option value="">Pilih Nama</option>
                               @foreach ($kepaladinas as $KepalaDinas)
                                 <option value="{{ $KepalaDinas->nama_lengkap }}">{{ $KepalaDinas->nama_lengkap }}</option>
                                 @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Nip</label>
                            <select class="form-control" name="nip" aria-label="Default select example">
                                <option value="">Pilih Nip</option>
                               @foreach ($kepaladinas as $KepalaDinas)
                                 <option value="{{ $KepalaDinas->nip }}">{{ $KepalaDinas->nip }}</option>
                                 @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <select class="form-control" name="jabatan" aria-label="Default select example">
                                <option value="">Pilih Jabatan</option>
                                @foreach ($Jabatan as $jabatan)
                                <option value="{{ $jabatan->nama_jabatan }}">{{ $jabatan->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Golongan</label>
                            <select class="form-control" name="golongan" onchange="pilih(this)"
                                aria-label="Default select example">
                                <option value="">Pilih Golongan</option>
                                @php
                                    $dokument = ['Non-PNS','IA', 'IB', 'IC', 'ID', 'IIA', 'IIB', 'IIC', 'IID', 'IIIA', 'IIIB', 'IIIC', 'IIID', 'IVA', 'IVB', 'IVC', 'IVD', 'IVE'];
                                @endphp
                                @foreach ($dokument as $g)
                                    <option value="{{ $g }}">{{ $g }}</option>
                                @endforeach
                            </select>
                            @error('golongan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Pangkat</label>
                            <input type="text" name="pangkat" id="pangkat" class="form-control form-control-sm"
                                required>
                            @error('pangkat')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('kelola_dokument') }}" class="btn btn-warning">Back</a>
            </div>
        </div>
    </form>
</section>
<!-- /.content -->
</div>
<script>
function pilih(val) {
    $.ajax({
        url: "{{ route('ajax_dokument') }}",
        type: 'POST',
        datatype: 'JSON',
        data: {
            "_token": "{{ csrf_token() }}",
            "document": val.value,
        },
        success: function(response) {
            $('#pangkat').val(response.pangkat)
        }
    })
}

</script>
@endsection
