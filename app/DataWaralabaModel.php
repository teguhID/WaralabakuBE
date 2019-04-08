<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataWaralabaModel extends Model
{
    protected $table = 'datawaralaba'; //table database
    protected $fillable = ['nama','alamat','jenis','phone','email','web','modal','gerai','bep','fee','keuntungan','hasil']; //kolom yang akan di isi
    
}
