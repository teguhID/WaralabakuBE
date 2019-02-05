<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttributModel;
use App\DataWaralabaModel;
use App\NilaiUtilityModel;


class DataWaralabaController extends Controller
{
    public function index() //MENAMPILKAN DATA WARALABA 
    {
        $data = DataWaralabaModel::all();
        return view('dataWaralaba.DaftarDataWaralaba')->with('data', $data); //buka file di view
    }

    public function create() // MEMBUKA HALAMAN INPUT DATA WARALABA
    { 
        return view('dataWaralaba.InputDataWaralaba');
    }

    public function store(Request $request) // INPUT DATA WARALABA, DATA KRITERIA, SEKALIGUS UPDATE NILAI UTILITY
    {
        // ================= CREATE DATA WARALABA =====================
        $dataWaralaba = DataWaralabaModel::create($request->all());
        // ================== CREATE DATA NILAI UTILITY ==================
        if($request->input('fee') == 'Ada' || $request->input('fee') == 'ada') {
            $fee = 1;
        } 
        else {
            $fee = 2;
        }
        // ========== input ke nilai kriteria ==========   
        NilaiUtilityModel::create([ 'idDW' => $dataWaralaba->id,
                                    'nama' => request('nama'),
                                    'modal' => request('modal'),
                                    'gerai' => request('gerai'),
                                    'bep' => request('bep'),
                                    'fee' => $fee,
                                    'keuntungan' => request('keuntungan'),
                                    'modalUtility' => 0,
                                    'geraiUtility' => 0,
                                    'bepUtility' => 0,
                                    'feeUtility' => 0,
                                    'keuntunganUtility' => 0,]);

        $val = $this->minMax();
        $nilaiKriteria = NilaiUtilityModel::all();
        foreach ($nilaiKriteria as $datas) {

            if (AttributModel::value('modal') == 'benefit') {
                $modal = ($datas->modal - $val['minModal'])/($val['maxModal']-$val['minModal']);       
            } else {
                $modal = ($val['maxModal'] - $datas->modal)/($val['maxModal']-$val['minModal']);
            }

            if (AttributModel::value('gerai') == 'benefit') {
                $gerai = ($datas->gerai - $val['minGerai'])/($val['maxGerai']-$val['minGerai']);       
            } else {
                $gerai = ($val['maxGerai'] - $datas->gerai)/($val['maxGerai']-$val['minGerai']);
            }

            if (AttributModel::value('bep') == 'benefit') {
                $bep = ($datas->bep -  $val['minBep'])/( $val['maxBep']- $val['minBep']);       
            } else {
                $bep = ( $val['maxBep'] - $datas->bep)/( $val['maxBep']- $val['minBep']);
            }

            if (AttributModel::value('fee') == 'benefit') {
                $fee = ($datas->fee - $val['minFee'])/($val['maxFee']-$val['minFee']);       
            } else {
                $fee = ($val['maxFee'] - $datas->fee)/($val['maxFee']-$val['minFee']);
            }

            if (AttributModel::value('keuntungan') == 'benefit') {
                $keuntungan = ($datas->keuntungan - $val['minKeuntungan'])/($val['maxKeuntungan']-$val['minKeuntungan']);       
            } else {
                $keuntungan = ($val['maxKeuntungan'] - $datas->keuntungan)/($val['maxKeuntungan']-$val['minKeuntungan']);
            }

            NilaiUtilityModel::where('id', $datas->id)->update(['modalUtility'=>$modal,
                                                                'geraiUtility'=>$gerai,
                                                                'bepUtility'=>$bep,
                                                                'feeUtility'=>$fee,
                                                                'keuntunganUtility'=>$keuntungan,
            ]);
        }
        return redirect('datawaralaba'); 
    }

    public function show($id) // MELIHAT DATA PER ID
    {
        $data = DataWaralabaModel::find($id);
        return view('dataWaralaba.DetailDataWaralaba')->with('data', $data); //buka file di view
    }

    public function edit($id) // MEMBUKA HALAMAN EDIT DATA WARALABA
    {
        $data = DataWaralabaModel::find($id);
        return view('dataWaralaba.EditDataWaralaba')->with('data', $data); //buka file di view   
    }

    public function update(Request $request, $id) // EDIT DATA WARALABA, DATA KRITERIA, SEKALIGUS UPDATE NILAI UTILITY
    {
        DataWaralabaModel::find($id)->update($request->all());

        // ================== CREATE DATA NILAI UTILITY ==================
        if($request->input('fee') == 'Ada' || $request->input('fee') == 'ada') {
            $fee = 1;
        } 
        else {
            $fee = 2;
        }
        // ========== input ke nilai kriteria ==========   
        NilaiUtilityModel::where('idDW', $id)->update(['nama' => request('nama'),
                                    'modal' => request('modal'),
                                    'gerai' => request('gerai'),
                                    'bep' => request('bep'),
                                    'fee' => $fee,
                                    'keuntungan' => request('keuntungan'),]);

        $val = $this->minMax();
        $nilaiKriteria = NilaiUtilityModel::all();
        foreach ($nilaiKriteria as $datas) {

            if (AttributModel::value('modal') == 'benefit') {
                $modal = ($datas->modal - $val['minModal'])/($val['maxModal']-$val['minModal']);       
            } else {
                $modal = ($val['maxModal'] - $datas->modal)/($val['maxModal']-$val['minModal']);
            }

            if (AttributModel::value('gerai') == 'benefit') {
                $gerai = ($datas->gerai - $val['minGerai'])/($val['maxGerai']-$val['minGerai']);       
            } else {
                $gerai = ($val['maxGerai'] - $datas->gerai)/($val['maxGerai']-$val['minGerai']);
            }

            if (AttributModel::value('bep') == 'benefit') {
                $bep = ($datas->bep -  $val['minBep'])/( $val['maxBep']- $val['minBep']);       
            } else {
                $bep = ( $val['maxBep'] - $datas->bep)/( $val['maxBep']- $val['minBep']);
            }

            if (AttributModel::value('fee') == 'benefit') {
                $fee = ($datas->fee - $val['minFee'])/($val['maxFee']-$val['minFee']);       
            } else {
                $fee = ($val['maxFee'] - $datas->fee)/($val['maxFee']-$val['minFee']);
            }

            if (AttributModel::value('keuntungan') == 'benefit') {
                $keuntungan = ($datas->keuntungan - $val['minKeuntungan'])/($val['maxKeuntungan']-$val['minKeuntungan']);       
            } else {
                $keuntungan = ($val['maxKeuntungan'] - $datas->keuntungan)/($val['maxKeuntungan']-$val['minKeuntungan']);
            }

            NilaiUtilityModel::where('id', $datas->id)->update(['modalUtility'=>$modal,
                                                                'geraiUtility'=>$gerai,
                                                                'bepUtility'=>$bep,
                                                                'feeUtility'=>$fee,
                                                                'keuntunganUtility'=>$keuntungan,
            ]);
        }
        return redirect('datawaralaba'); //redirect route waralaba.index
    }

    public function destroy($id) // HAPUS DATA WARALABA, DATA KRITERIA, SEKALIGUS UPDATE NILAI UTILITY
    {
        DataWaralabaModel::find($id)->delete();
        NilaiUtilityModel::where('idDW', $id)->delete();

        $val = $this->minMax();
        $nilaiKriteria = NilaiUtilityModel::all();
        foreach ($nilaiKriteria as $datas) {

            if (AttributModel::value('modal') == 'benefit') {
                $modal = ($datas->modal - $val['minModal'])/($val['maxModal']-$val['minModal']);       
            } else {
                $modal = ($val['maxModal'] - $datas->modal)/($val['maxModal']-$val['minModal']);
            }

            if (AttributModel::value('gerai') == 'benefit') {
                $gerai = ($datas->gerai - $val['minGerai'])/($val['maxGerai']-$val['minGerai']);       
            } else {
                $gerai = ($val['maxGerai'] - $datas->gerai)/($val['maxGerai']-$val['minGerai']);
            }

            if (AttributModel::value('bep') == 'benefit') {
                $bep = ($datas->bep -  $val['minBep'])/( $val['maxBep']- $val['minBep']);       
            } else {
                $bep = ( $val['maxBep'] - $datas->bep)/( $val['maxBep']- $val['minBep']);
            }

            if (AttributModel::value('fee') == 'benefit') {
                $fee = ($datas->fee - $val['minFee'])/($val['maxFee']-$val['minFee']);       
            } else {
                $fee = ($val['maxFee'] - $datas->fee)/($val['maxFee']-$val['minFee']);
            }

            if (AttributModel::value('keuntungan') == 'benefit') {
                $keuntungan = ($datas->keuntungan - $val['minKeuntungan'])/($val['maxKeuntungan']-$val['minKeuntungan']);       
            } else {
                $keuntungan = ($val['maxKeuntungan'] - $datas->keuntungan)/($val['maxKeuntungan']-$val['minKeuntungan']);
            }

            NilaiUtilityModel::where('id', $datas->id)->update(['modalUtility'=>$modal,
                                                                'geraiUtility'=>$gerai,
                                                                'bepUtility'=>$bep,
                                                                'feeUtility'=>$fee,
                                                                'keuntunganUtility'=>$keuntungan,
            ]);
        }
        return redirect('datawaralaba'); //redirect route waralaba.index
    }

    public function minMax() // FUNCTION MENCARI MIN MAX DATA KRITERIA
    {
        $val['minModal'] = NilaiUtilityModel::min('modal');
        $val['maxModal'] = NilaiUtilityModel::max('modal');
        $val['minGerai'] = NilaiUtilityModel::min('gerai');
        $val['maxGerai'] = NilaiUtilityModel::max('gerai');
        $val['minBep'] = NilaiUtilityModel::min('bep');
        $val['maxBep'] = NilaiUtilityModel::max('bep');
        $val['minFee'] = NilaiUtilityModel::min('fee');
        $val['maxFee'] = NilaiUtilityModel::max('fee');
        $val['minKeuntungan'] = NilaiUtilityModel::min('keuntungan');
        $val['maxKeuntungan'] = NilaiUtilityModel::max('keuntungan');
        return $val;
    }

}
