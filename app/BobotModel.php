<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BobotModel extends Model
{
    protected $table = 'bobot'; //table database
    protected $fillable = ['modal','gerai','bep','fee','keuntungan','modalNorm','geraiNorm','bepNorm','feeNorm','keuntunganNorm']; //kolom yang akan di isi
}
