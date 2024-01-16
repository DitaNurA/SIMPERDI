<?php

namespace App\Http\Controllers;
use App\RincianSppd;
use App\KepalaDinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;


class RincianSppdController extends Controller

{
    public function index()
    {
            $index = RincianSppd::all();

        return view('admin.rincian_sppd.index', compact('index'));
    }

    public function cetak()
    {
        $index = DB::select('SELECT *
        FROM rincian_sppd
        LEFT JOIN detail_surat
        ON rincian_sppd.no_sppd = detail_surat.no_sppd
        GROUP BY rincian_sppd.no_sppd;');

        return view('admin.cetak_rincian_sppd.index', compact('index'));
    }


        public function cetak2($id){
            $kepaladinas = KepalaDinas::all();
            $rinciansppd = RincianSppd::all();
            $rincian_sppd = DB::select('SELECT *
            FROM rincian_sppd
            LEFT JOIN detail_surat
            ON rincian_sppd.no_sppd = detail_surat.no_sppd
            GROUP BY rincian_sppd.no_sppd;');
    
            return view('admin.cetak_rincian_sppd.cetak_rincian_sppd', compact('kepaladinas','rinciansppd'), $rincian_sppd);
        }

    public function get_rincian_sppd()
    {
        $id = $_GET['id'];
        $index = RincianSppd::find($id);
        return response()->json($index);
    }

    public function create()
    {
        return view('admin.rincian_sppd.tambah');
    }

    public function store(Request $request)
    {
        $l = date_diff(date_create($request->tanggal_berangkat), date_create($request->tanggal_kembali));
        $tambah =  new RincianSppd;

        $tambah->tanggal = date('Y-m-d');
        $tambah->no_sppd = $request->no_sppd;
        $tambah->nama_lengkap = $request->nama_lengkap;
        $tambah->nip = $request->nip;
        $tambah->jabatan = $request->jabatan;
        $tambah->pangkat = $request->pangkat;
        $tambah->golongan = $request->golongan;
        $tambah->tanggal_berangkat = $request->tanggal_berangkat;
        $tambah->tanggal_kembali = $request->tanggal_kembali;
        $tambah->selama = $request->selama;
        $tambah->biaya_penginapan = $request->biaya_penginapan;
        $tambah->belanja_bbm = $request->belanja_bbm;
        $tambah->transport_pp = $request->transport_pp;
        $tambah->uang_harian = $request->uang_harian;
        $tambah->biaya_representase = $request->biaya_representase;
        $tambah->total_perjalanan_dinas = $request->total_perjalanan_dinas;
        $tambah->nominal_total = $request->nominal_total;
        $tambah->bayar_awal = $request->bayar_awal;
        $tambah->sisa = $request->sisa;
        $tambah->kode_rekening = $request->kode_rekening;
        $tambah->keperluan = $request->keperluan;
        $tambah->daerah_tujuan = $request->daerah_tujuan;
        $tambah->instansi_tujuan = $request->instansi_tujuan;
        $tambah->id_user = Auth::user()->id;
        $tambah->save();
        Alert::success('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('kelola_rincian_sppd');
    }

    public function edit($id)
    {
        $edit = RincianSppd::find($id);
        return view('admin.rincian_sppd.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = RincianSppd::find($id);

            $update->no_sppd = $request->no_sppd;
            $update->nama_lengkap = $request->nama_lengkap;
            $update->nip = $request->nip;
            $update->jabatan = $request->jabatan;
            $update->pangkat = $request->pangkat;
            $update->golongan = $request->golongan;
            $update->tanggal_berangkat = $request->tanggal_berangkat;
            $update->tanggal_kembali = $request->tanggal_kembali;
            $update->selama = $request->selama;
            $update->biaya_penginapan = $request->biaya_penginapan;
            $update->belanja_bbm = $request->belanja_bbm;
            $update->transport_pp = $request->transport_pp;
            $update->uang_harian = $request->uang_harian;
            $update->biaya_representase = $request->biaya_representase;
            $update->total_perjalanan_dinas = $request->total_perjalanan_dinas;
            $update->nominal_total = $request->nominal_total;
            $update->bayar_awal = $request->bayar_awal;
            $update->sisa = $request->sisa;
            $update->keperluan = $request->keperluan;
            $update->daerah_tujuan = $request->daerah_tujuan;
            $update->instansi_tujuan = $request->instansi_tujuan;
            $update->save();
       

        Alert::success('Data Berhasil', 'Data Berhasil diubah');
        return redirect()->route('kelola_rincian_sppd');
    }

    public function delete($id)
    {
        $delete = RincianSppd::find($id);
        $delete->delete();

        Alert::error('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('kelola_rincian_sppd');
    }

    public function cek_rincian_sppd()
    {
        $no_sppd = $_POST['no_sppd'];

        $isi = DB::table('detail_surat')
            ->JOIN('pegawai', 'pegawai.nip', '=', 'detail_surat.nip')
            ->JOIN('surat_tugas', 'surat_tugas.id', '=', 'detail_surat.surat_tugas_id')
            ->WHERE('detail_surat.no_sppd', $no_sppd)
            ->SELECT('detail_surat.*', 'pegawai.*', 'surat_tugas.tanggal_berangkat', 'surat_tugas.tanggal_kembali', 'surat_tugas.selama', 'surat_tugas.uraian', 'surat_tugas.tempat_tujuan')
            ->FIRST();

        return response()->json($isi);
    }

    public function get_biaya()
    {

        $biayapenginapan = DB::table('biaya_hotel')->get();

        return response()->json($biayapenginapan);
    }   
}
