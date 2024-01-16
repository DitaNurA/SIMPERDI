<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianSppdDalam extends Model
{
    use HasFactory;

    protected $table = 'rincian_sppd_dalam';

    protected $primaryKey = 'id';
}