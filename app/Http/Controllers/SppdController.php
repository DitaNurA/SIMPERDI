<?php

namespace App\Http\Controllers;
use App\Surat_tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\suratRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class SppdController extends Controller
{
    public function sppd(){
        
        $index = DB::table('surat_tugas')
            ->join('tanda_tangan_dokumen', 'surat_tugas.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas.*')
            ->where('id_user', Auth::user()->id)
            ->get();

        return view('admin.cetak_sppd.index', compact('index'));
    }
}
