<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_tugas_dalam extends Model
{
    use HasFactory;

    protected $table = 'surat_tugas_dalam';

    protected $primaryKey = 'id';

    public function detail()
    {
        return $this->belongsTo('App\Detail_surat_dalam', 'nip', 'nip');
    }
}
