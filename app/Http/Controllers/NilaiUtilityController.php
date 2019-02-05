<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiUtilityModel;

class NilaiUtilityController extends Controller
{
    public function index()
    {
        $data['data'] = NilaiUtilityModel::all();
        return view('nilaiUtility/daftarNilaiUtility')->with($data);
    }
}