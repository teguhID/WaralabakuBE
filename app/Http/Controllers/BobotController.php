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
        $data = BobotModel::find('1');
        $modal = $data->modal;
        $gerai = $data->gerai;
        $bep = $data->bep;
        $fee = $data->fee;
        $keuntungan = $data->keuntungan;
        $totalBobot = $modal + $gerai + $bep + $fee + $keuntungan;

        $modalNorm = $modal/$totalBobot;
        $geraiNorm = $gerai/$totalBobot;
        $bepNorm = $bep/$totalBobot;
        $feeNorm = $fee/$totalBobot;
        $keuntunganNorm = $keuntungan/$totalBobot;
        BobotModel::find($id)->update([ 'modalNorm' => $modalNorm,
                                        'geraiNorm' => $geraiNorm,
                                        'bepNorm' => $bepNorm,
                                        'feeNorm' => $feeNorm,
                                        'keuntunganNorm' => $keuntunganNorm,
                                        ]);
        return redirect('bobot');
    }

}