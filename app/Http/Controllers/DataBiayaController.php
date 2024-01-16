<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DataBiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function hotel()
    {
        $hotel = DB::table('biaya_hotel')->get();
        return view('admin.biaya_hotel.index_hotel', compact('hotel'));
    }

    public function hotel_edit($id)
    {
        $hotel_edit =  DB::table('biaya_hotel')->where('id', $id)->first();
        return view('admin.biaya_hotel.edit_hotel', compact('hotel_edit'));
    }

    public function hotel_update(Request $request, $id)
    {
        DB::table('biaya_hotel')->where('id', $id)->update([
            'tarif_a' => $request->tarif_a,
            'tarif_b' => $request->tarif_b,
            'tarif_c' => $request->tarif_c,
            'tarif_d' => $request->tarif_d,
        ]);

        Alert::success('Biaya Hotel', 'Data Berhasil Diedit');
        return redirect()->route('biaya_hotel');
    }
}
