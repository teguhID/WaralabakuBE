<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiKriteriaModel;
use App\MinMaxKriteriaModel;

class MinMaxKriteriaController extends Controller
{
    public function index()
    {
        echo "modal max = " . NilaiKriteriaModel::max('modal') . "</br>";
        echo "modal min = " . NilaiKriteriaModel::min('modal') . "</br></br>";
        echo "gerai max = " . NilaiKriteriaModel::max('gerai') . "</br>";
        echo "gerai min = " . NilaiKriteriaModel::min('gerai') . "</br></br>";
        echo "bep max = " . NilaiKriteriaModel::max('bep') . "</br>";
        echo "bep min = " . NilaiKriteriaModel::min('bep') . "</br></br>";
        echo "fee max = " . NilaiKriteriaModel::max('fee') . "</br>";
        echo "fee min = " . NilaiKriteriaModel::min('fee') . "</br></br>";
        echo "keuntungan max = " . NilaiKriteriaModel::max('keuntungan') . "</br>";
        echo "keuntungan min = " . NilaiKriteriaModel::min('keuntungan') . "</br></br>";
    }
}
