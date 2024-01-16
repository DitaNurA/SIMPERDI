<?php

namespace App\Http\Controllers;

use App\pegawai;
use App\Surat_tugas_dalam;
use App\Detail_surat_dalam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
class DetailDalamController extends Controller
{
    public function index()
    {

        return view('admin.sppd_dalam.modal_sppd_dalam');
    }

    public function create($id){
        $idtipe = Auth::user()->id;
        $surat_dalam = DB::table('surat_tugas_dalam')->where('id', $id)->first();
        $pegawai = DB::table('pegawai')->get();
        return view('admin.sppd_dalam.entry_sppd_dalam', compact('surat_dalam', 'pegawai'));
    }

    public function store(Request $request, $id)
    {

        try {
            $request->validate([
                'no_sppd.*' => 'required',
                'nip.*' => 'required',
            ]);
            $store = Surat_tugas_dalam::where('id', $id);
            $nip = $request->nip;
            $no_sppd = $request->no_sppd;
            foreach ($nip as $item => $value) {
                $store = new detail_surat_dalam;
                $store->surat_tugas_dalam_id = $request->id;
                $store->nip = $nip[$item];
                $store->no_sppd = $no_sppd[$item];
                $store->save();
            }
            Alert::success('Pegawai diinput', 'Data Berhasil Ditambahkan');
            return redirect()->route('kelola_surattugasdalam');
            //code...
        } catch (\Throwable $th) {
            Session::flash("no_sppd", "Data Tidak Ada");
            Session::flash("nip", "Data Tidak Ada");
            return redirect()->back();
        }
    }

    public function detail_dalam($id)
    {
        $detail_dalam = DB::table('surat_tugas_dalam')
            ->Join('detail_surat_dalam', 'detail_surat_dalam.surat_tugas_dalam_id', '=', 'surat_tugas_dalam.id')
            ->Join('pegawai', 'pegawai.nip', '=', 'detail_surat_dalam.nip')
            ->where('surat_tugas_dalam.id', '=', $id)
            ->select('detail_surat_dalam.nip as nips', 'detail_surat_dalam.id as id_surat', 'pegawai.*', 'detail_surat_dalam.no_sppd', 'surat_tugas_dalam.no_surat_tugas')
            ->get();
        return view('admin.detail_dalam.modal', compact('detail_dalam'));
    }

    public function delete($id)
    {
        DB::table("detail_surat_dalam")->where("id", $id)->delete();
        return redirect()->back();
    }
}
