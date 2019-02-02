<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiKriteriaModel;

class NilaiKriteriaController extends Controller
{
    public function index()
    {
        $data['data'] = NilaiKriteriaModel::all();
        return view('nilaiKriteria/daftarNilaiKriteria')->with($data);
    }
}