<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiUtilityModel extends Model
{
    protected $table = 'nilaiutility'; //table database
    protected $fillable = ['idDW','nama','modal','gerai','bep','fee','keuntungan','modalUtility','geraiUtility','bepUtility','feeUtility','keuntunganUtility','hasil']; //kolom yang akan di isi
}
