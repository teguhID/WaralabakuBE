<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataWaralabaModel;
use App\JenisAttributModel;
use App\NilaiAttributModel;

class NilaiAttributController extends Controller
{
    public function index()
    {
        $fields = ['modal','gerai','bep','fee','keuntungan'];
        foreach ($fields as $field) {
            if (JenisAttributModel::where($field, 'cost')->first()) {
                $data[$field] = DataWaralabaModel::min($field);
                NilaiAttributModel::where('id', '1')->update([$field => $data[$field],]);
            }
            else {
                $data[$field] = DataWaralabaModel::max($field);
                NilaiAttributModel::where('id', '1')->update([$field => $data[$field],]);
            }
        }   

         return view('nilaiAttribut/DaftarNilaiAttribut')->with('data', $data);
    }
}
