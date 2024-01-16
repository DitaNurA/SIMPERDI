<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{

    protected $table = 'pegawai';

    protected $primaryKey = 'id';


    public function surat_tugas()
    {
        return $this->belongsTo('App\Surat_tugas', 'nip', 'nip');
    }
}
