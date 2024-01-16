<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpjDalam extends Model
{
    use HasFactory;

    protected $table = 'spj_dalam';

    protected $primaryKey = 'id';
}
