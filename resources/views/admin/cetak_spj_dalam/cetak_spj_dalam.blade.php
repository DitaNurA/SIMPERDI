<!DOCTYPE html>
<html>

<head>
    <title>Surat SPJ Dalam Daerah</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }

        table tr .text2 {
            text-align: right;
            font-size: 10px;
        }

        table tr .text {
            font-size: 10px;
        }

        table tr td {
            font-size: 10px;
        }

        .table,
        th,
        td {}

    </style>

    {{-- <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> --}}
</head>

<body onload="print()">
    {{-- <div class="container" width="95"> --}}
    @foreach ($spjDalam as $item)
        <center style="display: flex; height: 100vh;">
            <div style="width: 95%;">
                <table width="95%">
                    <tr>
                        <td><img src="{{ asset('images/pemkab.png') }}" width="60" height="90">
                        </td>
                        <td class="ml-5">
                            <center>
                                <font style="font-family: Tahoma; font-size:14;"><b>PEMERINTAH KABUPATEN TUBAN</b>
                                </font>
                                <br>
                                <font style="font-family: Tahoma; font-size:14;"><b>DINAS KOMUNIKASI DAN INFORMATIKA, 
                                    STATISTIK DAN PERSANDIAN
                                    </b>
                                </font>
                                <br>
                                <font style="font-family: Tahoma; font-size:14;">Jl. Mastrip No.5A Tuban, Tlp. (0356) 8832697, e-mail : diskominfo@tubankab.go.id
                                </font>
                                <br> 
                                <font style="font-family: Tahoma; font-size:10;">TUBAN - 62315
                            </font><br>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr style="border: 1px solid black;">
                        </td>
                    </tr>

                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:14; text-align: center;"><b>RINCIAN PENERIMAAN PERJALANAN DINAS BIASA
                            </td>
                        </tr>
                    </table>
                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Nomor SPPD    :
                                {{ $item->no_sppd }}
                            </td>
                        </tr>
                    </table>
                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Bulan         :
                                {{ $item->bulan }}
                            </td>
                        </tr>
                    </table>
                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Kegiatan       :
                                {{ $item->kegiatan }}
                            </td>
                        </tr>
                    </table>
                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Sub-Kegiatan   :
                                {{ $item->subkegiatan }}
                            </td>
                        </tr>
                    </table>
                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Nomor Rekening  :
                                {{ $item->kode_rekening }}
                            </td>
                        </tr>
                    </table>
                    <br>
                    <tr>
                    <table width="95%" border="1" cellpadding="5">
                        <tr>
                            <td style="font-family: Arial; font-size:6; font-weight:bold;">NAMA PEGAWAI</td>
                            <td style="font-family: Arial; font-size:6; font-weight:bold;">TANGGAL</td>
                            <td style="font-family: Arial; font-size:6; font-weight:bold;">URAIAN</td>
                            <td style="font-family: Arial; font-size:6; font-weight:bold;">JUMLAH</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">
                            {{ $item->nama_lengkap }}
                            </td>
                            <td style="font-family: Arial; font-size:6;">
                            {{ $item->tanggal }}
                            </td>
                            <td style="font-family: Arial; font-size:6;">
                            {{ $item->uraian }}
                            </td>
                            <td style="font-family: Arial; font-size:6;">
                            {{ $item->jumlah }}
                            </td>
                            </td>
                        </tr>
                        
                    </table>
                    <table width="80%">
                        <tr>
                            <td style="font-family: Arial; font-size:11; text-align: left;">Coret yang tidak perlu *)
                            </td>
                        </tr>
                    </table>

                    <table width="50%" style="margin-left: 330px;">
                        <tr>
                            <td>
                                <font style="font-family: Tahoma; font-size:6;">Dikeluarkan di Tuban
                                </font>
                                <br>
                                <font style="font-family: Tahoma; font-size:6;">Pada tanggal, {{ \Carbon\Carbon::create($item->tanggal)->isoFormat('D MMMM Y') }}</font><br>
                                <font style="font-family: Tahoma; font-size:6;"><b>
                                </font><br>

                            </td>
                        </tr>
                    </table>
                    <br><br><br>
                    <table width="50%" style="margin-left: 330px">
                        <tr>
                            <td>

                                <font style="font-family: Tahoma; font-size:10;"><b>
                                @php
                                $pegawai = DB::select('SELECT nama_lengkap FROM pegawai WHERE jabatan = "Penata keuangan";');
                                @endphp
                                @foreach ($pegawai as $pegawai)
                                <b>{{ $pegawai->nama_lengkap }}</b><br>
                            @endforeach</b>
                                </font>
                                <font style="font-family: Tahoma; font-size:12;">
                                @php
                                $pegawai = DB::select('SELECT jabatan FROM pegawai WHERE jabatan = "Penata keuangan";');
                                @endphp
                                @foreach ($pegawai as $pegawai)
                                {{ $pegawai->jabatan }}<br>
                            @endforeach
                                </font>
                                
                                <font style="font-family: Tahoma; font-size:10;">
                                @php
                                $pegawai = DB::select('SELECT nip FROM pegawai WHERE jabatan = "Penata keuangan";');
                                @endphp
                                @foreach ($pegawai as $pegawai)
                                {{ $pegawai->nip }}<br>
                            @endforeach
                                </font><br>

                            </td>
                        </tr>
                    </table>

                </table>
            </div>
        </center>
    @endforeach
    {{-- </div> --}}
</body>

</html>
