<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisAttributModel extends Model
{
    protected $table = 'jenisattribut';
    protected $fillable = ['modal','gerai','bep','fee','keuntungan'];
}
