@extends('layouts.master')
@section('title', 'Edit data kepala dinas')
@section('content')

<div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-users"></i> Edit Kepala Dinas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Kepala Dinas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <form action="{{ route('proses_kepala_dinas_edit', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="">Nama lengkap</label>
                                    <input type="text" name="nama_lengkap" value="{{ $edit->nama_lengkap }}" id=""
                                        class="form-control form-control-sm" required>
                                    @error('nama_lengkap')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Nip</label>
                                    <input type="text" name="nip" id="" value="{{ $edit->nip }}"
                                        class="form-control form-control-sm">
                                    @error('nip')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <select class="form-control" name="jabatan" aria-label="Default select example">
                                        <option value="">Pilih Jabatan</option>
                                        @foreach ($Jabatan as $jabatan)
                                        <option value="{{ $jabatan->nama_jabatan }}">{{ $jabatan->nama_jabatan }}</option>
                                        @endforeach
                                    </select>
                                    <script>
                                        document.getElementsByName('jabatan')[0].value="{{$edit->jabatan}}"
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label for="">Golongan</label>
                                    <select class="form-control" name="golongan" onchange="kategori(this);"
                                        aria-label="Default select example">
                                        <option value="">Golongan</option>
                                        @php
                                            $golongan = ['IA', 'IB', 'IC', 'ID', 'IIA', 'IIB', 'IIC', 'IID', 'IIIA', 'IIIB', 'IIIC', 'IIID', 'IVA', 'IVB', 'IVC', 'IVD', 'IVE'];
                                        @endphp
                                        @foreach ($golongan as $g)
                                            <option value="{{ $g }}">{{ $g }}</option>
                                        @endforeach
                                    </select>
                                    <script>
                                        document.getElementsByName('golongan')[0].value = "{{ $edit->golongan }}"
                                    </script>
                                    @error('golongan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Pangkat</label>
                                    <input type="text" name="pangkat" id="pangkat" value="{{ $edit->pangkat }}"
                                        class="form-control form-control-sm" required>
                                    @error('pangkat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="1" class="form-label">Pilih Photo</label>
                                    <p>
                                        <input type="file" name="foto" id="imgInp" onchange="previewImage();">
                                        <img src="{{ asset('gambar/'.$edit->foto) }}" class="img-fluid img-thumbnail" style="width: 150px; height: 150px;">
                                </div>
                                <P>
                                    <img id="img-upload" style="width: 150px; height: 150px;" alt="image Upload" />
                                <p>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('kelola_kepala_dinas') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <script>
        function kategori(val) {
            $.ajax({
                type: 'POST',
                url: "{{ route('ajax_golongan') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "golongan": val.value
                },
                datatype: 'JSON',
                success: function(response) {
                    $("#pangkat").val(response.pangkat)
                }

            })
        }

        function previewImage() {
            document.getElementById("img-upload").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("imgInp").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("img-upload").src = oFREvent.target.result;
            };
        };

    </script>
@endsection
