<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiUtilityModel;
use App\DataWaralabaModel;

class ApiController extends Controller
{
    
    public function getData1(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData2(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData3(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData4(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData5(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData6(){// OK 
        return $this->query('jenis', '=', 'makanan', 'modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData7(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData8(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }

    public function getData9(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData10(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData11(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData12(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData13(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData14(){// OK 
        return $this->query('jenis', '=', 'makanan', 'modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData15(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData16(){// OK
        return $this->query('jenis', '=', 'makanan', 'modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }

    public function getData17(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData18(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData19(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData20(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData21(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData22(){// OK 
        return $this->query('jenis', '=', 'minuman', 'modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData23(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData24(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }

    public function getData25(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData26(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData27(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData28(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData29(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData30(){// OK 
        return $this->query('jenis', '=', 'minuman', 'modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData31(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData32(){// OK
        return $this->query('jenis', '=', 'minuman', 'modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }

    public function getData33(){// OK
        return $this->query1('modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData34(){// OK
        return $this->query1('modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData35(){// OK
        return $this->query1('modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData36(){// OK
        return $this->query1('modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData37(){// OK
        return $this->query1('modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData38(){// OK 
        return $this->query1('modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData39(){// OK
        return $this->query1('modal', '<=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData40(){// OK
        return $this->query1('modal', '<=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }

    public function getData41(){// OK
        return $this->query1('modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData42(){// OK
        return $this->query1('modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData43(){// OK
        return $this->query1('modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData44(){// OK
        return $this->query1('modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData45(){// OK
        return $this->query1('modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '<=', 3, 'keuntungan', '<=', 100);
    }
    public function getData46(){// OK 
        return $this->query1('modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'tidak ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData47(){// OK
        return $this->query1('modal', '>=', 7000000, 'gerai', '>=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }
    public function getData48(){// OK
        return $this->query1('modal', '>=', 7000000, 'gerai', '<=', 65, 'fee', '=', 'ada', 'bep', '>=', 3, 'keuntungan', '>=', 100);
    }

    public function detailData($id)
    {
        return json_encode(array('data' => DataWaralabaModel::where('id', '=', $id)->get()));
    }

    public function query(
        $jenis, $jenisStatement, $jenisValue,
        $modal, $modalStatement, $modalValue,
        $gerai, $geraiStatement, $geraiValue,
        $fee, $feeStatement, $feeValue,
        $bep, $bepStatement, $bepValue,
        $keuntungan, $keuntunganStatement, $keuntunganValue
    )
    {
        return json_encode(array('data' => DataWaralabaModel::join('nilaiutility', 'datawaralaba.id', '=', 'nilaiutility.idDW')->select('datawaralaba.*','nilaiutility.hasil')
                                                                                                    ->where('datawaralaba.' . $jenis, $jenisStatement, $jenisValue)
                                                                                                    ->where('datawaralaba.' . $modal, $modalStatement, $modalValue)
                                                                                                    ->where('datawaralaba.' . $gerai, $geraiStatement, $geraiValue)
                                                                                                    ->where('datawaralaba.' . $fee, $feeStatement, $feeValue)
                                                                                                    ->where('datawaralaba.' . $bep, $bepStatement, $bepValue)
                                                                                                    ->where('datawaralaba.' . $keuntungan, $keuntunganStatement, $keuntunganValue)
                                                                                                    ->orderBy('hasil', 'desc')->get()));
    }
    public function query1(
        $modal, $modalStatement, $modalValue,
        $gerai, $geraiStatement, $geraiValue,
        $fee, $feeStatement, $feeValue,
        $bep, $bepStatement, $bepValue,
        $keuntungan, $keuntunganStatement, $keuntunganValue
    )
    {
        return json_encode(array('data' => DataWaralabaModel::join('nilaiutility', 'datawaralaba.id', '=', 'nilaiutility.idDW')->select('datawaralaba.*','nilaiutility.hasil')
                                                                                                                                ->where('datawaralaba.' . $modal, $modalStatement, $modalValue)
                                                                                                                                ->where('datawaralaba.' . $gerai, $geraiStatement, $geraiValue)
                                                                                                                                ->where('datawaralaba.' . $fee, $feeStatement, $feeValue)
                                                                                                                                ->where('datawaralaba.' . $bep, $bepStatement, $bepValue)
                                                                                                                                ->where('datawaralaba.' . $keuntungan, $keuntunganStatement, $keuntunganValue)
                                                                                                                                ->orderBy('hasil', 'desc')->get()));
    }
}