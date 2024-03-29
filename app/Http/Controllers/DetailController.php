<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\Surat_tugas;
use App\Detail_surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
class DetailController extends Controller
{
    public function index()
    {

        return view('admin.sppd.modal_sppd');
    }

    public function create($id){
        $idtipe = Auth::user()->id;
        $surat = DB::table('surat_tugas')->where('id', $id)->first();
        $pegawai = DB::table('pegawai')->get();
        return view('admin.sppd.entry_sppd', compact('surat', 'pegawai'));
    }

    public function store(Request $request, $id)
    {

        try {
            $request->validate([
                'no_sppd.*' => 'required',
                'nip.*' => 'required',
            ]);
            $store = Surat_tugas::where('id', $id);
            $nip = $request->nip;
            $no_sppd = $request->no_sppd;
            foreach ($nip as $item => $value) {
                $store = new Detail_surat;
                $store->surat_tugas_id = $request->id;
                $store->nip = $nip[$item];
                $store->no_sppd = $no_sppd[$item];
                $store->save();
            }
            Alert::success('Pegawai diinput', 'Data Berhasil Ditambahkan');
            return redirect()->route('kelola_surattugas');
            //code...
        } catch (\Throwable $th) {
            Session::flash("no_sppd", "Data Tidak Ada");
            Session::flash("nip", "Data Tidak Ada");
            return redirect()->back();
        }
    }

    public function detail($id)
    {
        $detail = DB::table('surat_tugas')
            ->Join('detail_surat', 'detail_surat.surat_tugas_id', '=', 'surat_tugas.id')
            ->Join('pegawai', 'pegawai.nip', '=', 'detail_surat.nip')
            ->where('surat_tugas.id', '=', $id)
            ->select('detail_surat.nip as nips', 'detail_surat.id as id_surat', 'pegawai.*', 'detail_surat.no_sppd', 'surat_tugas.no_surat_tugas')
            ->get();
        return view('admin.detail.modal', compact('detail'));
    }

    public function delete($id)
    {
        DB::table("detail_surat")->where("id", $id)->delete();
        return redirect()->back();
    }
}
