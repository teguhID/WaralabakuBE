<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttributModel;
use App\NilaiUtilityModel;

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
        return redirect('attribut');
    }

    // ================================== FORMULA FOR UTILITY VALUE ===============================
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
