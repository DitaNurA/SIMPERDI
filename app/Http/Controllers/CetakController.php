<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\KepalaDinas;

class CetakController extends Controller
{
    public function surat($id)
    {
        $surat = DB::table('surat_tugas')->JOIN('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')->where('surat_tugas.id', $id)->select('surat_tugas.*', 'tanda_tangan_dokumen.*')->first();

        $kepaladinas = KepalaDinas::all();

        $pegawai = DB::table('detail_surat')->JOIN('pegawai', 'detail_surat.nip', '=', 'pegawai.nip')->WHERE('detail_surat.surat_tugas_id', $id)->get();
        
         $tipe = DB::table('surat_tugas')->JOIN('users', 'surat_tugas.id_user', '=','users.id' )->where('users.id', Auth::user()->id)->first();

       
        $data = [
            'surat' => $surat,
            'tipe' => $tipe,
            'pegawais' => $pegawai,
            'kepaladinas' => $kepaladinas
        ];
        return view('admin.cetak.surat', $data);
    }

    public function surat_staf($id)
    {
        $kepaladinas = KepalaDinas::all();
        $detail = DB::table('detail_surat')
            ->JOIN('pegawai', 'detail_surat.nip', '=', 'pegawai.nip')->WHERE('detail_surat.surat_tugas_id', $id)
            ->JOIN('surat_tugas', 'detail_surat.surat_tugas_id', '=', 'surat_tugas.id')
            ->JOIN('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select(
                'pegawai.*',
                'detail_surat.no_sppd',
                'detail_surat.nip',
                'pegawai.*',
                'surat_tugas.*',
                'tanda_tangan_dokumen.nama_lengkap as nm_lengkap',
                'tanda_tangan_dokumen.nip as t_nip',
                'tanda_tangan_dokumen.jabatan as t_jabatan',
                'tanda_tangan_dokumen.pangkat as t_pangkat'
            )
            ->get();

        return view('admin.cetak.surat_staff', compact('kepaladinas'), [
            "detail_surat" => $detail
        ]);
    }

}