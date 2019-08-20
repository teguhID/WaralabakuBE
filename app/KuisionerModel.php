<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KuisionerModel extends Model
{
    protected $table = 'kuisioner'; //table database
    protected $fillable = ['nama','bermanfaat','komentar','tindakLanjut','created_at','updated_at'];
}
