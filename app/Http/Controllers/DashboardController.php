<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
    return view('admin.index', [
        'total_pegawai' => DB::table('pegawai')->count(),
        'total_lokasi' => DB::table('tujuan')->count(),
        'total_akun' => DB::table('users')->count(),
        'total_surat' => DB::table('surat_tugas')->count(),
    ]);
}
}
