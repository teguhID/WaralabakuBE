<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttributModel;
use App\DataWaralabaModel;
use App\NilaiUtilityModel;
use App\BobotModel;

class DashboardController extends Controller
{
    public function index() //MENAMPILKAN DATA WARALABA 
    {
        $allData = DataWaralabaModel::offset(0)->limit(5)->get();
        $dataValCount = DataWaralabaModel::select('id')->count();

        $bestVal = NilaiUtilityModel::max('hasil');
        $bestData = NilaiUtilityModel::where('hasil', $bestVal)->first();
        
        $bobotData = BobotModel::all();
        $attributData = AttributModel::all();

        $utilityData = NilaiUtilityModel::orderBy('hasil', 'desc')->offset(0)->limit(5)->get();
        return view('dashboard', compact('allData', 'dataValCount', 'bestData', 'bobotData', 'attributData', 'utilityData'));
    }

    public function about()
    {
        return view('about');
    }

}
