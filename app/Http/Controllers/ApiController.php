<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiUtilityModel;
use App\DataWaralabaModel;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $keuntungan = $request->input('keuntungan');
        $fee = $request->input('fee');
        return NilaiUtilityModel::where('keuntungan', '<=', $keuntungan)->where('fee', '=', $fee)->get();
    }

    public function getData1(){
        return json_encode(array('data' => NilaiUtilityModel::where('fee', '=', '1')->get()));
    }
    public function getData2(){
        return json_encode(array('data' => NilaiUtilityModel::where('fee', '=', '2')->get()));
    }
}
