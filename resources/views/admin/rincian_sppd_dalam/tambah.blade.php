@extends('layouts.master')
@section('title', 'Tambah Rincian SPPD')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="nav-icon fas fa-copy"></i> Tambah Rincian SPPD Dalam Daerah</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Rincian SPPD</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <!-- Default box -->

            <form action="{{ route('proses_rincian_sppd_dalam_tambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="" method="POST">
                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <legend style="font-size: 18px;">Daftar Pengeluaran Perjalanan Dinas</legend>
                                        <div class="mb-3 row">
                                            <label for="no_sppd" class="col-sm-2 col-form-label">Nomor (SPPD)</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" name="no_sppd" id="no_sppd" required>
                                                    <option value="">Pilih Nomor (SPPD)</option>
                                                    @php
                                                        $sppd = DB::table('detail_surat_dalam')->get();
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
                                    </fieldset>
                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <legend style="font-size: 18px;">Rincian Biaya Perjalanan Dinas</legend>
                                        <div class="mb-3 row">
                                            <label for="uangHarian" class="col-sm-3 col-form-label">1. Uang Harian </label>
                                            <div class="col-sm-2">
                                                <input type="text" name="uang_harian" id="uangHarian" class="form-control form-control-sm" required>
                                            </div>
                                            <div class="col-sm-1">
                                                        <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#modalUangHarian"
                                                           >...</button>
                                                    </div>
                                            @error('uang_harian')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="biayaTransportPp" class="col-sm-3 col-form-label">2. Biaya
                                                Transportasi Pergi-Pulang </label>
                                            <div class="col-sm-2">
                                                <input type="text" name="transport_pp"
                                                    id="biayaTransportPp" class="form-control form-control-sm"
                                                    required>
                                            </div>
                                            @error('biaya_transport')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                                    <label for="biayaPenginapan" class="col-sm-3 col-form-label">3. Biaya Penginapan</label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="biaya_penginapan" id="biayaPenginapan"
                                                            class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <button type="button" class="btn btn-dark btn-sm"
                                                            id="btnBiayaPenginapan">...</button>
                                                    </div>
                                                    @error('biaya_penginapan')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                        <div class="mb-3 row">
                                            <label for="belanjaBBM" class="col-sm-3 col-form-label">4. Belanja BBM </label>
                                            <div class="col-sm-2">
                                                <input type="text" name="belanja_bbm" id="belanjaBBM"
                                                    class="form-control form-control-sm">
                                            </div>
                                            @error('belanja_bbm')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="biayaRepresentase" class="col-sm-3 col-form-label">5. Biaya
                                                Representase</label>
                                            <div class="col-sm-2">
                                                <input type="text" name="biaya_representase" id="biayaRepresentase"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            <div class="col-sm-1">
                                                        <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#modalBiayaRepresentase">...</button>
                                                    </div>
                                            @error('biaya_representase')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="hidden" name="total_perjalanan_dinas" id="inputanPerjalananDinas">
                                            <div style="font-size: 20px;">Total : Rp. <span
                                                    id="totalPerjalananDinas"></span></div>
                                        </div>
                                    </fieldset>

                                    <fieldset style="border: 1px solid #ccc; padding: 15px;">
                                        <legend style="font-size: 18px;">Rincian Perjalanan Dinas</legend>
                                        <div class="mb-3 row">
                                            <label for="daerahTujuan" class="col-sm-2 col-form-label">Daerah Tujuan</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="daerah_tujuan" id="daerahTujuan"
                                                    class="form-control" required>
                                            </div>
                                            @error('daerah_tujuan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="instansiTujuan" class="col-sm-2 col-form-label">Instansi
                                                Tujuan</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="instansi_tujuan" id="instansiTujuan"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('instansi_tujuan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="kodeRekening" class="col-sm-2 col-form-label">Nomor Rekening</label>

                                            <div class="col-sm-3">
                                                <input type="text" name="kode_rekening" id="kodeRekening"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('kode_rekening')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="keperluan" class="col-sm-2 col-form-label">Keperluan
                                                (Keterangan)</label>

                                            <div class="col-sm-3">
                                                <textarea name="keperluan" id="keperluan" cols="30" rows="3"
                                                    class="form-control" required></textarea>
                                            </div>
                                            @error('keperluan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nominal_total" class="col-sm-2 col-form-label">Nominal Total perjalanan Dinas</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="nominal_total" id="nominal_total"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('nominal_total')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="bayar_awal" class="col-sm-2 col-form-label">Yang dibayarkan di Awal</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="bayar_awal" id="bayar_awal"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('bayar_awal')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="sisa" class="col-sm-2 col-form-label">Sisa Kurang/Lebih yang Dibayarkan</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="sisa" id="sisa"
                                                    class="form-control form-control-sm" required>
                                            </div>
                                            @error('sisa')
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
                        <a href="{{ route('kelola_rincian_sppd_dalam') }}" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
        <div class="modal fade" id="modalUangHarian" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" >
                    <div class="modal-header">
                        <div class="p-3 text-center">
                        <h4 class="modal-title" id="exampleModalLabel">Peraturan Gubernur Jawa Timur</h4>
                        <br>
                        <span><b>Satuan Biaya Uang Harian Perjalanan Dinas Dalam Negeri</b></span>
                        </div>
                    </div>

                    <div class="modal-body">
                        Uang Harian Luar Daerah
                    <br><div class="table-responsive">
                    <table class="table table-bordered overflow-auto" id="tableUangHarian1" style="display:block; width: 100%;">
                  <thead class="d-block w-100">
                      <tr class="d-flex w-100">
                        <th class="w-50">PROVINSI</th>
                        <th class="w-50">UANG HARIAN LUAR KOTA</th>
                        <th class="w-50">UANG PENDIDIKAN DAN PELATIHAN</th>
                      </tr>
                  </thead>
                  <tbody class="w-100 d-block">
                    @php
                        $uangharianluar = DB::table('uang_harian_luar')->get();
                    @endphp
                    @foreach ($uangharianluar as $item)
                      <tr class="d-flex w-100">
                          <td class="w-50">{{ $item->provinsi }}</td>
                          <td class="w-50">{{ $item->luar_daerah }}</td>
                          <td class="w-50">{{ $item->pendidikan_pelatihan }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="modal-body">
                        Uang Harian Dalam Daerah
                    <br><div class="table-responsive">
              <table class="table table-bordered overflow-auto" id="tableUangHarian2" style="display:block; width: 100%;">
                  <thead class="d-block w-100">
                      <tr class="d-flex w-100">
                        <th class="w-50">PROVINSI</th>
                        <th class="w-50">UANG HARIAN DALAM KOTA</th>
                        <th class="w-50">UANG PENDIDIKAN DAN PELATIHAN</th>
                      </tr>
                  </thead>
                  <tbody class="w-100 d-block">
                    @php
                        $uanghariandalam = DB::table('uang_harian_dalam')->get();
                    @endphp
                    @foreach ($uanghariandalam as $item)
                      <tr class="d-flex w-100">
                          <td class="w-50">{{ $item->provinsi }}</td>
                          <td class="w-50">{{ $item->dalam_daerah }}</td>
                          <td class="w-50">{{ $item->pendidikan_pelatihan }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalBiayaRepresentase" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="p-3 text-center">
            <h5 class="modal-title" id="exampleModalLabel">Peraturan Gubernur Jawa Timur</h5>
            <span>Nomor : </span>
            <br>
            <span><b>Satuan Biaya Uang Representase Perjalanan Dinas</b></span>
            <div class="table-responsive">
              <table class="table table-bordered overflow-auto" id="tableUangHarian2" style="display:block; width: 100%;">
                  <thead class="d-block w-100">
                      <tr class="d-flex w-100">
                        <th class="w-50">JABATAN</th>
                        <th class="w-50">UANG LUAR DAERAH</th>
                        <th class="w-50">UANG DALAM DAERAH</th>
                      </tr>
                  </thead>
                  <tbody class="w-100 d-block">
                    @php
                        $biayarepresentase = DB::table('biaya_representasi')->get();
                    @endphp
                    @foreach ($biayarepresentase as $item)
                      <tr class="d-flex w-100">
                          <td class="w-50">{{ $item->jabatan }}</td>
                          <td class="w-50">{{ $item->luar_daerah }}</td>
                          <td class="w-50">{{ $item->dalam_daerah }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                    </table>
                </div>
          </div>
        <div class="modal-body" id="tableRepresentase">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
</div>



    @include('admin.modal.biaya_penginapan_modal')

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(document).ready(function() {
            
            //Biaya Hotel
            $("#btnBiayaPenginapan").click(function() {
                $("#modalBiayaPenginapan").modal();
            });
            $("#table_content_penginapan tbody").dblclick(function(e) {
                    e = e || window.event;
                    var data = [];
                    var target = e.srcElement || e.target;

                    while (target && target.nodeName !== "TR") {
                        target = target.parentNode;
                    }
                    if (target) {
                        var cells = target.getElementsByTagName("td");
                        for (var i = 0; i < cells.length; i++) {
                            data.push(cells[i].innerHTML);
                        }
                    }
                    let harga = data[1]

                    let durasi = $("#selama").val() - 1;
                    let totharga = parseInt(harga * durasi)

                    $("#biayaPenginapan").val(totharga);
                    $("#modalBiayaPenginapan").modal('hide');
                })
            

            $("#no_sppd").change(function(e) {
                let no_sppd = this.value;
                $.ajax({
                    type: "POST",
                    url: "{{ route('cek_rincian_sppd_dalam') }}",
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
                        $('#keperluan').val(response.uraian)
                        $('#daerahTujuan').val(response.tempat_tujuan)
                        $('#kodeRekening').val(response.kode_rekening)
                    }
                });
            });

            

            function hitungPerjalananDinas() {
                let uangHarian = $("#uangHarian").val() ? $("#uangHarian").val() : 0
                let biayaTransportPp = $("#biayaTransportPp").val() ? $("#biayaTransportPp")
                    .val() : 0
                let belanjaBBM = $("#belanjaBBM").val() ? $("#belanjaBBM").val() : 0
                let biayaPenginapan = $("#biayaPenginapan").val() ? $("#biayaPenginapan").val() : 0
                let biayaRepresentase = $("#biayaRepresentase").val() ? $("#biayaRepresentase").val() : 0

                let total = parseInt(uangHarian) + parseInt(biayaTransportPp) +
                    parseInt(belanjaBBM) + parseInt(biayaPenginapan) + parseInt(biayaRepresentase)

                $("#totalPerjalananDinas").html(total)
                $("#inputanPerjalananDinas").val(total)
            }

            $("#uangHarian").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#biayaTransportPp").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#belanjaBBM").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#biayaPenginapan").keyup(function() {
                hitungPerjalananDinas()
            })

            $("#biayaRepresentase").keyup(function() {
                hitungPerjalananDinas()
            })

        });
    </script>

@endsection
