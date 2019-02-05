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

        // ================================== UPDATE UTILITY VALUE WHEN ATTRIBUT CHANGED ===============================
        $nilaiKriteria = NilaiUtilityModel::all();
        foreach ($nilaiKriteria as $data) {
            $resultUtility['modal'] = $this->utility($data->modal, 'modal', 'minModal', 'maxModal');
            $resultUtility['gerai'] = $this->utility($data->gerai, 'gerai', 'minGerai', 'maxGerai');
            $resultUtility['bep'] = $this->utility($data->bep, 'bep', 'minBep', 'maxBep');
            $resultUtility['fee'] = $this->utility($data->fee, 'fee', 'minFee', 'maxFee');
            $resultUtility['keuntungan'] = $this->utility($data->keuntungan, 'keuntungan', 'minKeuntungan', 'maxKeuntungan');

            NilaiUtilityModel::where('id', $data->id)->update(['modalUtility'=>$resultUtility['modal'],
                                                                'geraiUtility'=>$resultUtility['gerai'],
                                                                'bepUtility'=>$resultUtility['bep'],
                                                                'feeUtility'=>$resultUtility['fee'],
                                                                'keuntunganUtility'=>$resultUtility['keuntungan'],
                                                                ]);
        }
        // ================================== UPDATE UTILITY VALUE WHEN ATTRIBUT CHANGED ===============================

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
        // ==================== AUTOMATICALLY UPDATE NILAI KRITERIA KETIKA DATA WARALABA DI UPDATE =====================   
        NilaiUtilityModel::where('idDW', $id)->update(['nama' => request('nama'),
                                    'modal' => request('modal'),
                                    'gerai' => request('gerai'),
                                    'bep' => request('bep'),
                                    'fee' => $fee,
                                    'keuntungan' => request('keuntungan'),]);
        // ================================== UPDATE UTILITY VALUE WHEN ATTRIBUT CHANGED ===============================
        $nilaiKriteria = NilaiUtilityModel::all();
        foreach ($nilaiKriteria as $data) {
            $resultUtility['modal'] = $this->utility($data->modal, 'modal', 'minModal', 'maxModal');
            $resultUtility['gerai'] = $this->utility($data->gerai, 'gerai', 'minGerai', 'maxGerai');
            $resultUtility['bep'] = $this->utility($data->bep, 'bep', 'minBep', 'maxBep');
            $resultUtility['fee'] = $this->utility($data->fee, 'fee', 'minFee', 'maxFee');
            $resultUtility['keuntungan'] = $this->utility($data->keuntungan, 'keuntungan', 'minKeuntungan', 'maxKeuntungan');

            NilaiUtilityModel::where('id', $data->id)->update(['modalUtility'=>$resultUtility['modal'],
                                                                'geraiUtility'=>$resultUtility['gerai'],
                                                                'bepUtility'=>$resultUtility['bep'],
                                                                'feeUtility'=>$resultUtility['fee'],
                                                                'keuntunganUtility'=>$resultUtility['keuntungan'],
                                                                ]);
        }
        // ================================== UPDATE UTILITY VALUE WHEN ATTRIBUT CHANGED ===============================
        return redirect('datawaralaba');
    }

    public function destroy($id) // HAPUS DATA WARALABA, DATA KRITERIA, SEKALIGUS UPDATE NILAI UTILITY
    {
        DataWaralabaModel::find($id)->delete();
        NilaiUtilityModel::where('idDW', $id)->delete();
        // ================================== UPDATE UTILITY VALUE WHEN ATTRIBUT CHANGED ===============================
        $nilaiKriteria = NilaiUtilityModel::all();
        foreach ($nilaiKriteria as $data) {
            $resultUtility['modal'] = $this->utility($data->modal, 'modal', 'minModal', 'maxModal');
            $resultUtility['gerai'] = $this->utility($data->gerai, 'gerai', 'minGerai', 'maxGerai');
            $resultUtility['bep'] = $this->utility($data->bep, 'bep', 'minBep', 'maxBep');
            $resultUtility['fee'] = $this->utility($data->fee, 'fee', 'minFee', 'maxFee');
            $resultUtility['keuntungan'] = $this->utility($data->keuntungan, 'keuntungan', 'minKeuntungan', 'maxKeuntungan');

            NilaiUtilityModel::where('id', $data->id)->update(['modalUtility'=>$resultUtility['modal'],
                                                                'geraiUtility'=>$resultUtility['gerai'],
                                                                'bepUtility'=>$resultUtility['bep'],
                                                                'feeUtility'=>$resultUtility['fee'],
                                                                'keuntunganUtility'=>$resultUtility['keuntungan'],
                                                                ]);
        }
        // ================================== UPDATE UTILITY VALUE WHEN ATTRIBUT CHANGED ===============================
        return redirect('datawaralaba');
    }

    public function utility($kriteriaVal, $attributVal, $kriteriaMin, $kriteriaMax) // PARAM 1 = NILAI KRITERIA 
    {                                                                               // PARAM 2 = NAMA ATTRIBUT KRITERIA, EX : 'modal'
        $kriteria['minModal'] = NilaiUtilityModel::min('modal');                    // PARAM 3 = NILAI KRITERIA MIN *
        $kriteria['maxModal'] = NilaiUtilityModel::max('modal');                    // PARAM 4 = NILAI KRITERIA MAX *
        $kriteria['minGerai'] = NilaiUtilityModel::min('gerai');                    // * LIHAT DAFTAR NYA DI DALAM FUNCTION
        $kriteria['maxGerai'] = NilaiUtilityModel::max('gerai');
        $kriteria['minBep'] = NilaiUtilityModel::min('bep');
        $kriteria['maxBep'] = NilaiUtilityModel::max('bep');
        $kriteria['minFee'] = NilaiUtilityModel::min('fee');
        $kriteria['maxFee'] = NilaiUtilityModel::max('fee');
        $kriteria['minKeuntungan'] = NilaiUtilityModel::min('keuntungan');
        $kriteria['maxKeuntungan'] = NilaiUtilityModel::max('keuntungan');

        if (AttributModel::value($attributVal) == 'benefit') {
            $utilityVal = ($kriteriaVal - $kriteria[$kriteriaMin])/($kriteria[$kriteriaMax]-$kriteria[$kriteriaMin]);       
        } else {
            $utilityVal = ($kriteria[$kriteriaMax] - $kriteriaVal)/($kriteria[$kriteriaMax]-$kriteria[$kriteriaMin]);
        }
        return $utilityVal;
    }

}
