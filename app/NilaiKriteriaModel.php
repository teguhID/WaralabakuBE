<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiKriteriaModel extends Model
{
    protected $table = 'nilaikriteria'; //table database
    protected $fillable = ['nama','modal','gerai','bep','fee','keuntungan']; //kolom yang akan di isi
}
