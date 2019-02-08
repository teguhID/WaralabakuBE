<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiUtilityModel;

class NilaiUtilityController extends Controller
{
    public function index()
    {
        $data = NilaiUtilityModel::all();
        return view('nilaiUtility/daftarNilaiUtility', compact('data', 'hasil'));
    }
    public function finalResultView()
    {
        $data = NilaiUtilityModel::orderBy('hasil', 'desc')->get();
        return view('result.DaftarResult')->with('data', $data); //buka file di view
    }

}