<!DOCTYPE html>
<html>

<head>
    <title>Rincian SPPD</title>
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
    @foreach ($rinciansppd as $item)
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
                            <td style="font-family: Arial; font-size:14; text-align: center;"><b>RINCIAN PERHITUNGAN BIAYA PERJALANAN DINAS
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Nomor SPPD    :
                                {{ $item->no_sppd }}
                            </td>
                        </tr>
                    </table>
                    <table width="95%">
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Tanggal         :
                                {{ $item->tanggal_berangkat}} sampai
                                {{ $item->tanggal_kembali}}
                            </td>
                        </tr>
                    </table>
                    
                    <br>
                    <tr>
                    <table width="95%" border="1" cellpadding="5">
                        <tr>
                            <td style="font-family: Arial; font-size:6; font-weight:bold;">PERINCIAN BIAYA</td>
                            <td style="font-family: Arial; font-size:6; font-weight:bold;">JUMLAH</td>
                            <td style="font-family: Arial; font-size:6; font-weight:bold;">KETERANGAN</td>

                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">Uang Harian
                            {{ $item->selama }} hari x {{ $item->uang_harian}}
                            </td>
                            <td style="font-family: Arial; font-size:6;">Rp. 
                            {{ $item->total_perjalanan_dinas }}
                            </td>
                            <td style="font-family: Arial; font-size:6;">
                            {{ $item->keperluan }}
                            </td>
                            
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">Jumlah
                            </td>
                            <td style="font-family: Arial; font-size:6;">Rp. 
                            {{ $item->total_perjalanan_dinas }}
                            </td>
                            <td style="font-family: Arial; font-size:6;">
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:6;">
                            {{ $item->nominal_total }}
                            </td>
                            <td style="font-family: Arial; font-size:6;">
                            </td>
                            <td style="font-family: Arial; font-size:6;">
                            </td>
                            </td>
                        </tr>
                    </table><br>


                    <table width="50%" style="margin-left: 430px;">
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
                    <br>
                    <table width="80%">
                        <tr>
                            <td style="font-family: Arial; font-size:11; text-align: left;">Telah Dibayar Sejumlah
                            <p>Rp. {{ $item->total_perjalanan_dinas }}</p>
                            <p>({{ $item->nominal_total}})</p>
                            </td>
                            <td style="font-family: Arial; font-size:11; text-align: left;">Telah Menerima Uang Sebesar
                            <p>Rp. {{ $item->total_perjalanan_dinas }}</p>
                            <p>({{ $item->nominal_total}})</p>
                            </td>
                        </tr>
                    </table><br><br><br><br>
                    <table width="90%">
                        <tr align="justify">
                            <td> Bendahara Pengeluaran<br>
                                Dinas Komunikasi dan Informatika,<br>
                            Statistik dan Persandian Kabupaten Tuban</td>
                            <td>Mengetahui, PPTK</td>
                            <td>Yang Menerima</td>
                        </tr>
                        <tr>
                            <td><br><br><br><br><br><br></td>
                            <td><br><br><br><br><br><br></td>
                            <td><br><br><br><br><br><br></td>
                        </tr>
                        <tr>
                            <td> 
                            <font style="font-family: Tahoma; font-size:11; text-align: left;"><b>
                                @php
                                $pegawai = DB::select('SELECT nama_lengkap FROM pegawai WHERE jabatan = "Penata keuangan";');
                                @endphp
                                @foreach ($pegawai as $pegawai)
                                <u><b>{{ $pegawai->nama_lengkap }}</b></u><br>
                            @endforeach</b>
                                </font>
                                <font style="font-family: Tahoma; font-size:12; text-align: left;">
                                @php
                                $pegawai = DB::select('SELECT jabatan FROM pegawai WHERE jabatan = "Penata keuangan";');
                                @endphp
                                @foreach ($pegawai as $pegawai)
                                {{ $pegawai->jabatan }}<br>
                            @endforeach
                                </font>
                                
                                <font style="font-family: Tahoma; font-size:10; text-align: left;">
                                @php
                                $pegawai = DB::select('SELECT nip FROM pegawai WHERE jabatan = "Penata keuangan";');
                                @endphp
                                @foreach ($pegawai as $pegawai)
                                {{ $pegawai->nip }}<br>
                            @endforeach
                                </font>
                            </td>
                            <td> 
                                <font style="font-family: Tahoma; font-size:11; text-align: left;"><b>
                                @php
                                $pegawai = DB::select('SELECT nama_lengkap FROM pegawai WHERE jabatan = "Penata Tk.I";');
                                @endphp
                                @foreach ($pegawai as $pegawai)
                                <u><b>{{ $pegawai->nama_lengkap }}</u></b><br>
                            @endforeach</b>
                                </font>
                                <font style="font-family: Tahoma; font-size:12; text-align: left;">
                                @php
                                $pegawai = DB::select('SELECT jabatan FROM pegawai WHERE jabatan = "Penata Tk.I";');
                                @endphp
                                @foreach ($pegawai as $pegawai)
                                {{ $pegawai->jabatan }}<br>
                            @endforeach
                                </font>
                                
                                <font style="font-family: Tahoma; font-size:10; text-align: left;">
                                @php
                                $pegawai = DB::select('SELECT nip FROM pegawai WHERE jabatan = "Penata Tk.I";');
                                @endphp
                                @foreach ($pegawai as $pegawai)
                                {{ $pegawai->nip }}<br>
                            @endforeach
                                </font><br>
                            </td>
                            <td>
                            <font style="font-family: Tahoma; font-size:11; text-align: left;">
                                <u><b>{{ $item->nama_lengkap }}</b></u><br>
                                </font><br>
                                <font style="font-family: Tahoma; font-size:12; text-align: left;">
                                {{ $item->jabatan }}<br>
                                </font>
                                
                                <font style="font-family: Tahoma; font-size:10; text-align: left;">
                                {{ $item->nip }}<br>
                                </font>
                            </td>
                        </tr>
                    </table>
                    <table>
                    <hr color="black" size="2">
                    </table>
                    <table width="90%">
                        <tr>
                        <td>
                            <b><font style="font-family: Tahoma; font-size:6;">PERHITUNGAN SPPD RAMPUNG
                                </font></b>
                        </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Ditetapkan Sejumlah  :Rp. 
                                {{ $item->total_perjalanan_dinas }}
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Yang Telah Dibayar Semula :Rp. 
                                {{ $item->total_perjalanan_dinas }}
                            </td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size:11;">Sisa Kurang/Lebih :Rp. 
                                {{ $item->sisa }}
                            </td>
                        </tr>
                    </table>
                    <br><br><br>
                    <table width="50%" style="margin-left: 430px">
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td style="font-family: Arial; font-size:11;">
                            <p>Pengguna Anggaran</p>
                            <p>Dinas komunikasi dan Informatika,</p>
                            <p>Statistik dan Persandian</p>
                            <p>Kabupaten Tuban</p><br><br>
                            <br><br><br>
                            <font style="font-family: Tahoma; font-size:11;"><b>
                                @foreach ($kepaladinas as $kepaladinas)
                                <u><b>{{ $kepaladinas->nama_lengkap }}</b></u><br>
                            @endforeach</b>
                                </font>
                                <font style="font-family: Tahoma; font-size:11;">
                                {{ $kepaladinas->pangkat }}<br>
                                </font>
                                <font style="font-family: Tahoma; font-size:11;">
                                {{ $kepaladinas->nip }}<br>
                                </font>
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
