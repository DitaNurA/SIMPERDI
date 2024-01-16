<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianSppd extends Model
{
    use HasFactory;

    protected $table = 'rincian_sppd';

    protected $primaryKey = 'id';
}