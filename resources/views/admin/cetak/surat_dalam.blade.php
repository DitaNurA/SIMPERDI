<!DOCTYPE html>
<html>

<head>
    <title>Surat Tugas </title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }

    </style>
</head>

<body onload="print()">
    <center>
        <table width="80%">
            <tr>
                <td><img src="{{ asset('images/pemkab.png') }}" width="90" height="90"></td>
                <td align="center">
                    <font style="font-family: Tahoma; font-size:14;"><b>PEMERINTAH KABUPATEN TUBAN</b>
                    </font>
                    <br>
                    <font style="font-family: Tahoma; font-size:14;"><b>DINAS KOMUNIKASI DAN INFORMATIKA, 
                        STATISTIK DAN PERSANDIAN</b></font>
                    <br>
                    <font style="font-family: Tahoma; font-size:10;">Jl. Mastrip No.5A Tuban, Tlp. (0356) 8832697, e-mail : diskominfo@tubankab.go.id
                    </font><br>
                    <font style="font-family: Tahoma; font-size:10;">TUBAN - 62315
                    </font><br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr style="border: 2px solid black;">
                    <hr style="border: 0.3px solid rgb(104, 104, 104); margin-top: -4px;">
                </td>
            </tr>
        </table>
        <table width="80%">
            <tr>
                <td style="font-family: Arial; font-size:11; text-align: center;">SURAT TUGAS</td>
            </tr>
            <tr>
                <td style="font-family: Arial; font-size:11; text-align: center;">Nomor :
                    {{ $surat -> no_surat_tugas }}</td>
            </tr>
        </table>
        <br><br>
        <table width="80%">
        <tr>
                <td>
                    <center>
                        <font style="font-family: Arial; font-size:11;"><br>Yang Bertanda tangan Dibawah Ini :<br></font>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <table width="80%">
        {{-- @if (isset($kepala)) --}}
            @foreach ($kepaladinas as $KepalaDinas)
                <tr class="text2">
                    <td style="font-family: Arial; font-size:11;" width="140"> &nbsp; Nama </td>
                    <td style="font-family: Arial; font-size:11;">:</td>
                    <td style="font-family: Arial; font-size:11;"><b>{{ $KepalaDinas->nama_lengkap }}</b></td>
                </tr>
                <tr>
                    <td style="font-family: Arial; font-size:11;"> &nbsp; Pangkat/Gol.Ruang </td>
                    <td style="font-family: Arial; font-size:11;">:</td>
                    <td style="font-family: Arial; font-size:11;">{{ $KepalaDinas->pangkat }}/{{ $KepalaDinas->golongan }}</td>
                </tr>
                <tr>
                    <td style="font-family: Arial; font-size:11;"> &nbsp; NIP</td>
                    <td style="font-family: Arial; font-size:11;">:</td>
                    <td style="font-family: Arial; font-size:11;"> {{ $KepalaDinas->nip }}</td>
                </tr>
                <tr>
                    <td style="font-family: Arial; font-size:11;"> &nbsp; Jabatan </td>
                    <td style="font-family: Arial; font-size:11;">:</td>
                    <td style="font-family: Arial; font-size:11;"> {{ $KepalaDinas->jabatan }}</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            @endforeach
            {{-- @endif --}}
        </table>
        <table width="80%">
            <tr>
                <td>
                    <center>
                        <font style="font-family: Arial; font-size:11;"><br>Memberi Tugas :<br></font>
                    </center>
                </td>
            </tr>
        </table>

        <table width="80%">
            {{-- @if (isset($kepala)) --}}

            @foreach ($pegawais as $key => $pegawai)
                <tr class="text2">
                    <?php if ($key == 0) { ?>
                    <td style="font-family: Arial; font-size:11;" width="80">Kepada &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                    </td>
                    <?php } else { ?>
                    <td style="font-family: Arial; font-size:11;" width="80"></td>
                    <?php } ?>
                    <td style="font-family: Arial; font-size:11;" width="140"> &nbsp; Nama </td>
                    <td style="font-family: Arial; font-size:11;">:</td>
                    <td style="font-family: Arial; font-size:11;"><b>{{ $pegawai->nama_lengkap }}</b></td>
                </tr>

                <tr>
                    <td></td>
                    <td style="font-family: Arial; font-size:11;"> &nbsp; Pangkat/Gol.Ruang </td>
                    <td style="font-family: Arial; font-size:11;">:</td>
                    <td style="font-family: Arial; font-size:11;">{{ $pegawai->pangkat }}/{{ $pegawai->golongan }}</td>
                </tr>

                <tr>
                    <td></td>
                    <td style="font-family: Arial; font-size:11;"> &nbsp; NIP</td>
                    <td style="font-family: Arial; font-size:11;">:</td>
                    <td style="font-family: Arial; font-size:11;"> {{ $pegawai->nip }}</td>
                </tr>

                <tr>
                    <td></td>
                    <td style="font-family: Arial; font-size:11;"> &nbsp; Jabatan </td>
                    <td style="font-family: Arial; font-size:11;">:</td>
                    <td style="font-family: Arial; font-size:11;"> {{ $pegawai->jabatan }}</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            @endforeach
            {{-- @endif --}}
        </table>

        <table width="80%">
            <tr align="justify">
                <td style="font-family: Arial; font-size:11;" width="100">Untuk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </td>
                <td width="5" style="vertical-align: top;">a.</td>
                <td width="500" style="font-family: Arial; font-size:11;"> {{ $surat->uraian }}</td>
                <br>
            </tr>
            <tr align="justify">
                <td></td>
                <td width="5" style="vertical-align: top;">b.</td>
                <td width="564" style="font-family: Arial; font-size:11;"> Melaporkan hasil perjalanan dinas kepada
                    Kepala Dinas Komunikasi dan Informatika, Statistik dan Persandian
                    Kabupaten Tuban.</td>
            </tr>
        </table>
        <br>
        </table>

        <br><br>
        <table width="80%">
            <tr align="left">
                <td width="350" style="font-family: Arial; font-size:11;"><br><br><br><br></td>
                <td style="font-family: Arial; font-size:11;">Ditetapkan di Tuban<br> pada tanggal {{ \Carbon\Carbon::create($surat->tanggal)->isoFormat('D MMMM Y') }}<hr align="left" style="width: 150px; border: 1px solid black;"><br><?= ucfirst($surat->jabatan) ?>, <br><br><br><br><br><b><?= ucfirst($surat->nama_lengkap) ?></b><hr align="left" style="width: 150px; border: 1px solid black;">Pangkat : <?= $surat->pangkat ?><br>NIP : <?= $surat->nip ?></td>
            </tr>
        </table>
    </center>
</body>

</html>
