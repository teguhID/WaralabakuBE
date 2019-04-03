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

    public function getData()
    {
        return json_encode(array('movies' => NilaiUtilityModel::get()));
    }
}
