<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributModel extends Model
{
    protected $table = 'attribut';
    protected $fillable = ['modal','gerai','bep','fee','keuntungan'];
}
