<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataWaralabaModel;
use App\NilaiKriteriaModel;
use App\MinMaxKriteriaModel;

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

        // ========== bila input fee ada nilai kriteria fee 1 dan sebaliknya ==========
        if($request->input('fee') == 'Ada') {
            echo $fee = 1;
        } 
        else {
            echo $fee = 2;
        }
        // ========== input ke nilai kriteria ==========   
        NilaiKriteriaModel::create(['nama' => request('nama'),
                                    'modal' => request('modal'),
                                    'gerai' => request('gerai'),
                                    'bep' => request('bep'),
                                    'fee' => $fee,
                                    'keuntungan' => request('keuntungan'),]);
        
        // ========== set min max kriteria ==========  
        $minModal = NilaiKriteriaModel::min('modal');
        $maxModal = NilaiKriteriaModel::max('modal');
        $minGerai = NilaiKriteriaModel::min('gerai');
        $maxGerai = NilaiKriteriaModel::max('gerai');
        $minBep = NilaiKriteriaModel::min('bep');
        $maxBep = NilaiKriteriaModel::max('bep');
        $minFee = NilaiKriteriaModel::min('fee');
        $maxFee = NilaiKriteriaModel::max('fee');
        $minKeuntungan = NilaiKriteriaModel::min('keuntungan');
        $maxKeuntungan = NilaiKriteriaModel::max('keuntungan');
        
        MinMaxKriteriaModel::where('kriteria', 'modal')->update(['min' => $minModal,
                                                                'max' => $maxModal]);
        MinMaxKriteriaModel::where('kriteria', 'gerai')->update(['min' => $minGerai,
                                                                'max' => $maxGerai]);
        MinMaxKriteriaModel::where('kriteria', 'bep')->update(['min' => $minBep,
                                                                'max' => $maxBep]);
        MinMaxKriteriaModel::where('kriteria', 'fee')->update(['min' => $minFee,
                                                                'max' => $maxFee]);
        MinMaxKriteriaModel::where('kriteria', 'keuntungan')->update(['min' => $minKeuntungan,
                                                                    'max' => $maxKeuntungan]);                          
        
        //redirect route waralaba.index
        return redirect('datawaralaba'); 
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
