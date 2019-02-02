<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MinMaxKriteriaModel extends Model
{
    protected $table = 'minmaxkriteria'; //table database
    protected $fillable = ['modal','gerai','bep','fee','keuntungan']; //kolom yang akan di isi
}
