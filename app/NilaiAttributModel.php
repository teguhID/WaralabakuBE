<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiAttributModel extends Model
{
    protected $table = 'nilaiattribut';
    protected $fillable = ['modal','gerai','bep','fee','keuntungan']; //kolom yang akan di isi
    protected $casts = [
        'modal' => 'integer',
        'gerai' => 'integer' 
      ];
}
