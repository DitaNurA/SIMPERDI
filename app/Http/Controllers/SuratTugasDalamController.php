<?php

namespace App\Http\Controllers;

use App\Surat_tugas_dalam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\suratDalamRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class SuratTugasDalamController extends Controller
{
    public function index()
    {
        
        $index = DB::table('surat_tugas_dalam')
            ->join('tanda_tangan_dokumen', 'surat_tugas_dalam.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas_dalam.*')
            ->where('id_user', Auth::user()->id)
            ->get();

        return view('admin.entry_spt_dalam.index', compact('index'));
    }

    public function cetak(){
        
        $index = DB::table('surat_tugas_dalam')
            ->join('tanda_tangan_dokumen', 'surat_tugas_dalam.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'surat_tugas_dalam.*')
            ->where('id_user', Auth::user()->id)
            ->get();

        return view('admin.cetak_surat_tugas_dalam.index', compact('index'));
    }

    public function create()
    {
        return view('admin.entry_spt_dalam.tambah');
    }

    public function store(suratDalamRequest $request)
    {
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $store = new surat_tugas_dalam;

        $store->no_surat_tugas = $request->no_surat_tugas;
        $store->tanggal = $request->tanggal;
        $store->tanggal_berangkat = $request->tanggal_berangkat;
        $store->tanggal_kembali = $request->tanggal_kembali;
        $store->selama = $l->d;
        $store->alat_angkutan = $request->alat_angkutan;
        $store->tempat_berangkat = $request->tempat_berangkat;
        $store->tempat_tujuan = $request->tempat_tujuan;
        $store->uraian = $request->uraian;
        $store->mulai_berlaku = $request->mulai_berlaku;
        $store->tanda_tangan_dokumen_id = $request->tanda_tangan_dokumen_id;
        $store->id_user = Auth::user()->id;

        $store->save();
        Alert::success('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('kelola_surattugasdalam');
    }

    public function edit($id)
    {
        $edit = DB::table('surat_tugas_dalam')
            ->join('tanda_tangan_dokumen', 'surat_tugas_dalam.tanda_tangan_dokumen_id', '=', 'tanda_tangan_dokumen.id')
            ->where('surat_tugas_dalam.id', $id)
            ->select('tanda_tangan_dokumen.nama_lengkap as nm_lengkap', 'tanda_tangan_dokumen.id as id_dokumen', 'surat_tugas_dalam.*')
            ->first();

        $no_tugas = $edit->no_surat_tugas;
        $edit->surat_tugas = explode("/", $no_tugas)[0];

        return view('admin.entry_spt_dalam.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $update = Surat_tugas_dalam::find($request->id);

        $update->no_surat_tugas = $request->no_surat_tugas . "" . $request->no_surat_tugas2;
        $update->tanggal = $request->tanggal;
        $update->tanggal_berangkat = $request->tanggal_berangkat;
        $update->tanggal_kembali = $request->tanggal_kembali;
        $update->selama = $l->d;
        $update->alat_angkutan = $request->alat_angkutan;
        $update->tempat_berangkat = $request->tempat_berangkat;
        $update->tempat_tujuan = $request->tempat_tujuan;
        $update->uraian = $request->uraian;
        $update->mulai_berlaku = $request->mulai_berlaku;
        $update->tanda_tangan_dokumen_id = $request->tanda_tangan_dokumen_id;

        $update->save();
        Alert::success('Data Berhasil', 'Data Berhasil diedit');
        return redirect()->route('kelola_surattugasdalam');
    }

    public function delete($id)
    {
        $del = Surat_tugas_dalam::find($id);
        $del2 = DB::table('detail_surat_dalam')->where('surat_tugas_dalam_id', $id);
        $del->delete();
        $del2->delete();

        Alert::success('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('kelola_surattugasdalam');
    }
}
