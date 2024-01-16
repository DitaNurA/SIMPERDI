<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangHarianDalam extends Model
{
    use HasFactory;

    protected $table = 'uang_harian_dalam';

    protected $primaryKey = 'id';
}
