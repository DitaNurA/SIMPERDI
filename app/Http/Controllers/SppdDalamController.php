<?php

namespace App\Http\Controllers;

use App\Surat_tugas_dalam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\suratDalamRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class SppdDalamController extends Controller
{
    public function sppd_dalam(){
        
        $index = DB::table('surat_tugas_dalam')
            ->join('tanda_tangan_dokumen', 'surat_tugas_dalam.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas_dalam.*')
            ->where('id_user', Auth::user()->id)
            ->get();

        return view('admin.cetak_sppd_dalam.index', compact('index'));
    }
}
