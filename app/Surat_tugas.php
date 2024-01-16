<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_tugas extends Model
{
    use HasFactory;

    protected $table = 'surat_tugas';

    protected $primaryKey = 'id';

    public function detail()
    {
        return $this->belongsTo('App\Detail_surat', 'nip', 'nip');
    }
}
