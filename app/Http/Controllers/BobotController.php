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

    public function create()
    {
        return view('bobot/EditBobot');
    }
}
