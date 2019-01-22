<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataWaralaba extends Controller
{
    public function index()
    {
        return view('dataWaralaba/DaftarDataWaralaba');
    }
}
