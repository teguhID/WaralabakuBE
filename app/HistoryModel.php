<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryModel extends Model
{
    protected $table = 'history'; //table database
    protected $fillable = ['id','jawaban2','jawaban3','jawaban4','jawaban5','jawaban6'];
}
