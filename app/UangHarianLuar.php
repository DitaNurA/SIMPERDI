<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangHarianLuar extends Model
{
    use HasFactory;

    protected $table = 'uang_harian_luar';

    protected $primaryKey = 'id';
}
