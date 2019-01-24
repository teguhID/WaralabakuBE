<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BobotModel;

class BobotController extends Controller
{
    public function index()
    {
        $data = BobotModel::find('1');
        return view('bobot/daftarBobot')->with('data', $data);
    }

    public function edit($id)
    {
        $data = BobotModel::find($id);
        return view('bobot.EditBobot')->with('data', $data);
    }

    public function update(Request $req, $id)
    {
        BobotModel::find($id)->update($req->all());
        return redirect('bobot');
    }

}