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

    public function show($id)
    {
        $data = DataWaralabaModel::find($id);
        return view('dataWaralaba.DetailDataWaralaba')->with('data', $data); //buka file di view
    }

    public function edit($id)
    {
        $data = DataWaralabaModel::find($id);
        return view('dataWaralaba.EditDataWaralaba')->with('data', $data); //buka file di view   
    }

    public function update(Request $request, $id)
    {
        DataWaralabaModel::find($id)->update($request->all());
        return redirect('datawaralaba'); //redirect route waralaba.index
    }

    public function destroy($id)
    {
        DataWaralabaModel::find($id)->delete();
        return redirect('datawaralaba'); //redirect route waralaba.index
    }
}
