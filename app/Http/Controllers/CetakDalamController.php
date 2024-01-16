<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\KepalaDinas;

class CetakDalamController extends Controller
{
    public function surat_dalam($id)
    {
        $surat = DB::table('surat_tugas_dalam')->JOIN('tanda_tangan_dokumen', 'surat_tugas_dalam.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')->where('surat_tugas_dalam.id', $id)->select('surat_tugas_dalam.*', 'tanda_tangan_dokumen.*')->first();

        $kepaladinas = KepalaDinas::all();

        $pegawai = DB::table('detail_surat_dalam')->JOIN('pegawai', 'detail_surat_dalam.nip', '=', 'pegawai.nip')->WHERE('detail_surat_dalam.surat_tugas_dalam_id', $id)->get();
        
         $tipe = DB::table('surat_tugas_dalam')->JOIN('users', 'surat_tugas_dalam.id_user', '=','users.id' )->where('users.id', Auth::user()->id)->first();

       
        $data = [
            'surat' => $surat,
            'tipe' => $tipe,
            'pegawais' => $pegawai,
            'kepaladinas' => $kepaladinas
        ];
        return view('admin.cetak.surat_dalam', $data);
    }

    public function sppd_dalam($id)
    {
        $kepaladinas = KepalaDinas::all();
        $detail_dalam = DB::table('detail_surat_dalam')
            ->JOIN('pegawai', 'detail_surat_dalam.nip', '=', 'pegawai.nip')->WHERE('detail_surat_dalam.surat_tugas_dalam_id', $id)
            ->JOIN('surat_tugas_dalam', 'detail_surat_dalam.surat_tugas_dalam_id', '=', 'surat_tugas_dalam.id')
            ->JOIN('tanda_tangan_dokumen', 'surat_tugas_dalam.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select(
                'pegawai.*',
                'detail_surat_dalam.no_sppd',
                'detail_surat_dalam.nip',
                'pegawai.*',
                'surat_tugas_dalam.*',
                'tanda_tangan_dokumen.nama_lengkap as nm_lengkap',
                'tanda_tangan_dokumen.nip as t_nip',
                'tanda_tangan_dokumen.jabatan as t_jabatan',
                'tanda_tangan_dokumen.pangkat as t_pangkat'
            )
            ->get();

        return view('admin.cetak.surat_staff_dalam', compact('kepaladinas'), [
            "detail_surat_dalam" => $detail_dalam
        ]);
    }

}