<?php

namespace App\Http\Controllers;

use App\Spj;
use App\Surat_tugas;
use App\KepalaDinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class SpjController extends Controller
{
    public function index()
    {
            $index = Spj::all();

        return view('admin.entry_spj.index', compact('index'));
    }

    public function cetak(){
        
        $index = DB::select('SELECT *
        FROM spj
        LEFT JOIN detail_surat
        ON spj.no_sppd = detail_surat.no_sppd
        GROUP BY spj.no_sppd;');
        
        return view('admin.cetak_spj.index', compact('index'));
    }

    public function cetak2($id)
    {
        $kepaladinas = KepalaDinas::all();
        $spj = Spj::all();
        $spj_staff = DB::select('SELECT *
        FROM spj
        LEFT JOIN detail_surat
        ON spj.no_sppd = detail_surat.no_sppd
        GROUP BY spj.no_sppd;');

        return view('admin.cetak_spj.cetak_spj', compact('kepaladinas','spj'), $spj_staff);
    }
    

    public function create(){
        return view('admin.entry_spj.tambah');
    }

    public function store(Request $request){
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $store = new Spj;

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
        return redirect()->route('kelola_spj');
    }

    public function edit($id)
    {
        $edit = Spj::find($id);
        return view('admin.entry_spj.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $update = Spj::find($request->id);

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
        return redirect()->route('kelola_spj');
    }

    public function delete($id)
    {
        $delete = Spj::find($id);
        $delete->delete();

        Alert::error('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('kelola_spj');
    }

    public function cek_sppd()
    {
        $no_sppd = $_POST['no_sppd'];

       /**$isi = DB::table('detail_surat')
        ->JOIN('pegawai', 'pegawai.nip', '=', 'detail_surat.nip')
        ->JOIN('surat_tugas', 'surat_tugas.id', '=', 'detail_surat.surat_tugas_id')
        ->WHERE('detail_surat.no_sppd', $no_sppd)
        ->SELECT('detail_surat.*', 'pegawai.*', 'surat_tugas.tanggal_berangkat', 'surat_tugas.tanggal_kembali', 'surat_tugas.selama', 'surat_tugas.uraian', 'surat_tugas.tempat_tujuan')
        ->FIRST();*/

        $isi = DB::table('rincian_sppd')
        ->JOIN('detail_surat', 'detail_surat.no_sppd','=', 'rincian_sppd.no_sppd')
        ->WHERE('rincian_sppd.no_sppd',$no_sppd)
        ->SELECT('rincian_sppd.*')
        ->FIRST();
        return response()->json($isi);
    }
}
