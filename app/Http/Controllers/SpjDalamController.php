<?php

namespace App\Http\Controllers;

use App\SpjDalam;
use App\Surat_tugas_dalam;
use App\KepalaDinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class SpjDalamController extends Controller
{
    public function index()
    {
            $index = SpjDalam::all();

        return view('admin.entry_spj_dalam.index', compact('index'));
    }

    public function cetak(){
        
        $index = DB::select('SELECT *
        FROM spj_dalam
        LEFT JOIN detail_surat_dalam
        ON spj_dalam.no_sppd = detail_surat_dalam.no_sppd
        GROUP BY spj_dalam.no_sppd;');
        
        return view('admin.cetak_spj_dalam.index', compact('index'));
    }

    public function cetak2($id)
    {
        $kepaladinas = KepalaDinas::all();
        $spjDalam = SpjDalam::all();
        $spj_dalam = DB::select('SELECT *
        FROM spj_dalam
        LEFT JOIN detail_surat_dalam
        ON spj_dalam.no_sppd = detail_surat_dalam.no_sppd
        GROUP BY spj_dalam.no_sppd;');

        return view('admin.cetak_spj_dalam.cetak_spj_dalam', compact('kepaladinas','spjDalam'), $spj_dalam);
    }
    

    public function create(){
        return view('admin.entry_spj_dalam.tambah');
    }

    public function store(Request $request){
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $store = new SpjDalam;

        $store->no_sppd = $request->no_sppd;
        $store->nama_lengkap = $request->nama_lengkap;
        $store->nip = $request->nip;
        $store->jabatan = $request->jabatan;
        $store->pangkat = $request->pangkat;
        $store->golongan = $request->golongan;
        $store->tanggal_berangkat = $request->tanggal_berangkat;
        $store->tanggal_kembali = $request->tanggal_kembali;
        $store->selama = $l->d;
        $store->uraian = $request->uraian;
        $store->kegiatan = $request->kegiatan;
        $store->subkegiatan = $request->subkegiatan;
        $store->jumlah = $request->jumlah;
        $store->tanggal = $request->tanggal;
        $store->bulan = $request->bulan;
        $store->kode_rekening = $request->kode_rekening;

        $store->save();
        Alert::success('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('kelola_spj_dalam');
    }

    public function edit($id)
    {
        $edit = SpjDalam::find($id);
        return view('admin.entry_spj_dalam.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $update = SpjDalam::find($request->id);

        $update->no_sppd = $request->no_sppd;
        $update->nama_lengkap = $request->nama_lengkap;
        $update->nip = $request->nip;
        $update->jabatan = $request->jabatan;
        $update->pangkat = $request->pangkat;
        $update->golongan = $request->golongan;
        $update->tanggal_berangkat = $request->tanggal_berangkat;
        $update->tanggal_kembali = $request->tanggal_kembali;
        $update->selama = $l->d;
        $update->uraian = $request->uraian;
        $update->kegiatan = $request->kegiatan;
        $update->subkegiatan = $request->subkegiatan;
        $update->jumlah = $request->jumlah;
        $update->tanggal = $request->tanggal;
        $update->bulan = $request->bulan;
        $update->kode_rekening = $request->kode_rekening;

        $update->save();
        Alert::success('Data Berhasil', 'Data Berhasil diedit');
        return redirect()->route('kelola_spj_dalam');
    }

    public function delete($id)
    {
        $delete = SpjDalam::find($id);
        $delete->delete();

        Alert::error('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('kelola_spj_dalam');
    }

    public function cek_sppd_dalam()
    {
        $no_sppd = $_POST['no_sppd'];

        /**$isi = DB::table('detail_surat_dalam')
            ->JOIN('pegawai', 'pegawai.nip', '=', 'detail_surat_dalam.nip')
            ->JOIN('surat_tugas_dalam', 'surat_tugas_dalam.id', '=', 'detail_surat_dalam.surat_tugas_dalam_id')
            ->WHERE('detail_surat_dalam.no_sppd', $no_sppd)
            ->SELECT('detail_surat_dalam.*', 'pegawai.*', 'surat_tugas_dalam.tanggal_berangkat', 'surat_tugas_dalam.tanggal_kembali', 'surat_tugas_dalam.selama', 'surat_tugas_dalam.uraian', 'surat_tugas_dalam.tempat_tujuan')
            ->FIRST();*/
            $isi = DB::table('rincian_sppd_dalam')
        ->JOIN('detail_surat_dalam', 'detail_surat_dalam.no_sppd','=', 'rincian_sppd_dalam.no_sppd')
        ->WHERE('rincian_sppd_dalam.no_sppd',$no_sppd)
        ->SELECT('rincian_sppd_dalam.*')
        ->FIRST();

        return response()->json($isi);
    }
}
