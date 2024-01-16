<?php

namespace App\Http\Controllers;

use IDCrypt;
Use App\User;

use DateTime;
use Carbon\Carbon;

use Illuminate\Http\Request;

class adminController extends Controller
{
   public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        return view('admin.index');
    }
    /**public function admin()
    {
        $dalam = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Dalam Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_dalam'))
            ->first();

        $luar = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Luar Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_luar'))
            ->first();

        return view('halaman_admin.kelola_akun.dashboard', [
            'dinas_dalam' => $dalam,
            'dinas_luar' => $luar
        ]);
    }

    public function kwitansi()
    {
        $dalam = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Dalam Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_dalam'))
            ->first();

        $luar = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Luar Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_luar'))
            ->first();

        return view('halaman_admin.kelola_akun.dashboard', [
            'dinas_dalam' => $dalam,
            'dinas_luar' => $luar
        ]);
    }

    public function surat_tugas()
    {
        $dalam = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Dalam Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_dalam'))
            ->first();

        $luar = DB::table('spj_staff')
            ->JOIN('program_kerja', 'spj_staff.kode_kegiatan', '=', 'program_kerja.kode_kegiatan')
            ->where('program_kerja.jenis_perjalanan', 'Dinas Luar Daerah')
            ->select(DB::raw('sum(jumlah_total) as jumlah_dinas_luar'))
            ->first();

        return view('halaman_admin.kelola_akun.dashboard', [
            'dinas_dalam' => $dalam,
            'dinas_luar' => $luar
        ]);
    }**/
}
