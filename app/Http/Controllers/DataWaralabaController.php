<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataWaralabaModel;

class DataWaralabaController extends Controller
{
    public function index()
    {
        $data = DataWaralabaModel::all();
        return view('dataWaralaba.DaftarDataWaralaba')->with('data', $data); //buka file di view
    }

    public function create()
    {
        return view('dataWaralaba.InputDataWaralaba');
    }

    public function store(Request $request)
    {
        DataWaralabaModel::create($request->all());

        return redirect('datawaralaba'); //redirect route waralaba.index
    }
}
