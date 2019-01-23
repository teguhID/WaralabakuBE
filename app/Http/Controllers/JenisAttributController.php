<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisAttributModel;

class JenisAttributController extends Controller
{
    public function index()
    {
        $data = JenisAttributModel::find('1');
        return view('jenisAttribut/daftarJenisAttribut')->with('data', $data);
    }

    public function edit($id)
    {
        $data = JenisAttributModel::find($id);
        return view('jenisAttribut/EditJenisAttribut')->with('data', $data);
    }

    public function update(Request $req, $id)
    {
        JenisAttributModel::find($id)->update($req->all());
        return redirect('jenisattribut');
    }
}
