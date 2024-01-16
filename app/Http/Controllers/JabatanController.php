<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $index = Jabatan::all();
        return view('admin.jabatan.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jabatan.tambah');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_jabatan' => 'required',
            'nama_jabatan' => 'required',
        ]);

        $store = new jabatan;
        $store->kode_jabatan = $request->kode_jabatan;
        $store->nama_jabatan = $request->nama_jabatan;
        $store->save();
        return redirect(route('kelola_jabatan'))->with('sukses', 'Data Jabatan '.$request->nama.' Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Jabatan::find($id);
        return view('admin.jabatan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Jabatan::find($request->id);

        $update->kode_jabatan = $request->kode_jabatan;
        $update->nama_jabatan = $request->nama_jabatan;
        $update->save();

        return redirect(route('kelola_jabatan'))->with('sukses', 'Data Jabatan '.$request->nama.' Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Jabatan::find($id)->delete();

        return redirect(route('kelola_jabatan'))->with('hapus', 'Data Jabatan Berhasil di hapus');
    }
}

