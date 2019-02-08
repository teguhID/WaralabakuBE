@extends('layout/layout')
@section('title')
    Dashboard
@endsection
@section('content')

    <div class="row"> {{-- CONTENT PERTAMA --}}
        <div class="col-lg-4 col-sm-8">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="icon-big icon-info text-center" disabled>
                                <i class="ti-server"></i>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="numbers">
                                <p>Data Yang Tersedia</p>
                                <font color="#a3a3a3">{{ $dataValCount . '  Data' }}</font>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr/>
                        <a href="#" class="ti-arrow-circle-right"> Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-sm-14">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="icon-big icon-danger text-center">
                                    <i class="ti-calendar"></i>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="numbers">
                                    i have no idea with this box content !!!
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">Data Waralaba</h4>
                    <hr>
                    <table class="table table-striped" name="tblWaralabaDb">
                        <thead>
                                <th>no</th>
                                <th>nama</th>
                                <th>jenis</th>
                        </thead>
                        <tbody>
                            @foreach ($allData as $datas)
                                <tr>
                                    <td>no</td>
                                    <td>{{$datas->nama}}</td>
                                    <td>{{$datas->jenis}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                                <tr>
                                    <td><a href="#" class="ti-arrow-circle-right"> Lihat Data</a></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="card">
                <div class="content">
                    <h4 class="title">Data Bobot</h4>
                <hr>
                @foreach ($bobotData as $data)
                <font color="#858585">
                    <h5> Modal : {{ $data->modalNorm }}</h5>
                    <h5> Gerai : {{ $data->geraiNorm }}</h5>
                    <h5> Bep : {{ $data->bepNorm }}</h5>
                    <h5> Fee : {{ $data->feeNorm }}</h5>
                    <h5> Keuntungan : {{ $data->keuntunganNorm }}</h5>
                    <hr/>
                </font>
                    <a href="#" class="ti-arrow-circle-right"> Lihat Data</a>
                @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="content">
                    <h4 class="title">Data Attribut</h4>
                <hr>
                @foreach ($attributData as $data)
                <font color="#858585">
                    <h5> Modal : {{ $data->modal }}</h5>
                    <h5> Gerai : {{ $data->gerai }}</h5>
                    <h5> Bep : {{ $data->bep }}</h5>
                    <h5> Fee : {{ $data->fee }}</h5>
                    <h5> Keuntungan : {{ $data->keuntungan }}</h5>
                    <hr/>
                </font>
                    <a href="#" class="ti-arrow-circle-right"> Lihat Data</a>
                @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="icon-big icon-warning text-center">
                                <i class="ti-crown"></i>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="numbers">
                                <p>Waralaba Terbaik</p>
                                {{ $bestData->nama }}
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr/>
                        <a href="#" class="ti-arrow-circle-right"> Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card">
                <div class="content">
                    <h4 class="title">Jenis Waralaba</h4>
                <hr>
                {{-- @foreach ($attributData as $data) --}}
                <font color="#858585">
                    <h5> Makanan : {{ 0 }}</h5>
                    <h5> Minuman : {{ 0 }}</h5>
                    <hr/>
                </font>
                {{-- @endforeach --}}
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="content">
                    <h4 class="title">Kota Asal Waralaba</h4>
                <hr>
                {{-- @foreach ($attributData as $data) --}}
                <font color="#858585">
                    <h5> Jakarta : {{ 0 }}</h5>
                    <h5> Bandung : {{ 0 }}</h5>
                    <h5> Other : {{ 0 }}</h5>
                    <hr/>
                </font>
                {{-- @endforeach --}}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">Peringkat Waralaba</h4>
                    <hr>
                    <table class="table table-striped" name="tblWaralabaDb">
                        <thead>
                                <th>no</th>
                                <th>nama</th>
                                <th>jenis</th>
                                <th>nilai</th>
                        </thead>
                        <tbody>
                            @foreach ($utilityData as $datas)
                                <tr>
                                    <td>no</td>
                                    <td>{{$datas->nama}}</td>
                                    <td>{{$datas->jenis}}</td>
                                    <td>{{$datas->hasil}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                                <tr>
                                    <td><a href="#" class="ti-arrow-circle-right"> Lihat Data</a></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

    

    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dbLi').removeClass('inactive').addClass('active');
        });
    </script>

@endsection
