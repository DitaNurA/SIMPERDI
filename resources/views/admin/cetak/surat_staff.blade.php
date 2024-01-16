<!DOCTYPE html>
<html>

<head>
    <title>Surat SPPD Staff</title>
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
    @foreach ($detail_surat as $item)
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
                            <td style="font-family: Arial; font-size:14; text-align: center;"><b>SURAT PERINTAH
                                    PERJALANAN DINAS (SPPD)
                            </td>
                        </tr>
                    </table>
                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11; text-align: center;">Nomor :
                                {{ $item->no_sppd }}
                            </td>
                        </tr>
                    </table>
                    <br>
                    <tr>
                    <table width="95%" border="1" cellpadding="5">
                        <tr>
                            <td style="font-family: Arial; font-size:6;">1.</td>
                            <td style="font-family: Arial; font-size:6;">Pejabat berwenang yang Memberi Perintah</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">
                            @foreach ($kepaladinas as $pejabat)
                                <b>{{ $pejabat->nama_lengkap }}</b><br><br>
                                {{ $pejabat->nip }}
                            @endforeach
                            </td>
                        </tr>
                        <tr>
                        <td style="font-family: Arial; font-size:6;">2.</td>
                            <td style="font-family: Arial; font-size:6;">Nama/NIP Pegawai yang diperintahkan Perjalanan Dinas</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">
                                <b>{{ $item->nama_lengkap }}</b><br><br>
                                {{ $item->nip }}
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">3.</td>
                            <td style="font-family: Arial; font-size:6;">a. Pangkat dan Golongan<br>
                                b. Jabatan/ Instansi<br>
                            <td style="font-family: Arial; font-size:6;" colspan="2">
                                a. {{ $item->pangkat }} {{ $item->golongan }}<br>
                                b. {{ $item->jabatan }}<br>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">4.</td>
                            <td style="font-family: Arial; font-size:6;">Maksud Perjalanan Dinas</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">{{ $item->uraian }}</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">5.</td>
                            <td style="font-family: Arial; font-size:6;">Alat angkutan yang dipergunakan </td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">
                                {{ $item->alat_angkutan }}</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">6.</td>
                            <td style="font-family: Arial; font-size:6;">a. Tempat berangkat<br>
                                b. Tempat tujuan</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">a.
                                {{ $item->tempat_berangkat }}<br>
                                b. {{ $item->tempat_tujuan }}</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">7.</td>
                            <td style="font-family: Arial; font-size:6;">a. Lamanya Perjalanan Dinas<br>
                                b. Tanggal berangkat<br>
                                c. Tanggal harus kembali/ tiba ditempat
                                Baru*)</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">a.
                                {{ $item->selama }}<br>
                                b. {{ $item->tanggal_berangkat }}<br>
                                c. {{ $item->tanggal_kembali }}</td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">8.</td>
                            <td style="font-family: Arial; font-size:6;">Pembebanan Anggaran<br>
                                a. Instansi<br>
                                b. Nomor Rekening</td>
                            <td style="font-family: Arial; font-size:6;" colspan="2">a. 
                                <br>
                                b.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">9.</td>
                            <td style="font-family: Arial; font-size:6;">Keterangan Lain-lain</td>
                            <td colspan="2"></td>
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
                                @foreach ($kepaladinas as $pejabat)
                                <b>{{ $pejabat->jabatan }}</b><br><br>
                            @endforeach</b>
                                </font><br>

                            </td>
                        </tr>
                    </table>
                    <br><br><br>
                    <table width="50%" style="margin-left: 330px">
                        <tr>
                            <td>

                                <font style="font-family: Tahoma; font-size:10;"><b>
                                        {{ $item->nm_lengkap }}</b>
                                </font><br>
                                <font style="font-family: Tahoma; font-size:12;">Pangkat :
                                    {{ $item->t_pangkat }}
                                </font>
                                <br>
                                <font style="font-family: Tahoma; font-size:10;">NIP. : {{ $item->t_nip }}
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
