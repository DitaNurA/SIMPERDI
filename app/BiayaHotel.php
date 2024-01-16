<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaHotel extends Model
{
    use HasFactory;

    protected $table = 'biaya_hotel';

    protected $primaryKey = 'id';
}
