<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttributModel;

class AttributController extends Controller
{
    public function index()
    {
        $data = AttributModel::find('1');
        return view('Attribut/daftarAttribut')->with('data', $data);
    }

    public function edit($id)
    {
        $data = AttributModel::find($id);
        return view('Attribut/EditAttribut')->with('data', $data);
    }

    public function update(Request $req, $id)
    {
        AttributModel::find($id)->update($req->all());
        return redirect('attribut');
    }
}
