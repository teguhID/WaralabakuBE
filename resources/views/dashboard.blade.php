@extends('layout/layout')
@section('title')
    Dashboard
@endsection
@section('dashboardTitle')
    Sistem Pendukung Keputusan Rekomendasi Waralaba </br> Dengan Metode SMART
@endsection
@section('content')
    <div class="row"> {{-- CONTENT PERTAMA --}}
        <div class="col-lg-4 col-sm-8">
            <div class="card" style="background-color:#eb4d4b;">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="icon-big white-color text-center">
                                <i class="lnr lnr-database"></i>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="numbers">
                                <p class="white-color">Database Waralaba</p>
                                <font class="white-color"> {{ $dataValCount . '  Data' }}</font>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr/>
                        <a href="{{ url('/datawaralaba') }}" class="white-color"> <i class="lnr lnr-chevron-right-circle"></i> Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card" style="background-color:#95a5a6;">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="icon-big white-color text-center">
                                <i class="lnr lnr-license"></i>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="numbers">
                                <p class="white-color">Top Rekomendasi Waralaba</p>
                                <font class="white-color">{{ $bestData->nama }}</font>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr/>
                        <a href="{{ url('/result') }}" class="white-color"><i class="lnr lnr-chevron-right-circle"></i> Lihat Semua Rekomendasi </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2">
                <a href="{{ url('/datawaralaba/create') }}">
                <div class="card" style="background-color:#f1c40f;">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="button white-color">
                                    <i class="lnr lnr-plus-circle"></i>
                                    <h6>Input Data Baru</h6></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">Data Semua Waralaba</h4>
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
                                    <td><a href="{{ url('/datawaralaba') }}"><i class="lnr lnr-chevron-right-circle"></i> Lihat Data </a></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="card" style="background-color:rgb(39, 174, 96);">
                <div class="content">
                    <h4 class="title-white">Data Bobot</h4>
                <hr>
                @foreach ($bobotData as $data)
                <font class="white-color">
                    <h5> Modal : {{ $data->modalNorm }}</h5>
                    <h5> Gerai : {{ $data->geraiNorm }}</h5>
                    <h5> Bep : {{ $data->bepNorm }}</h5>
                    <h5> Fee : {{ $data->feeNorm }}</h5>
                    <h5> Keuntungan : {{ $data->keuntunganNorm }}</h5>
                    <hr/>
                </font>
                    <a href="{{ url('/bobot') }}" class="white-color"><i class="lnr lnr-chevron-right-circle"></i> Lihat Data</a>
                @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card" style="background-color:rgb(155, 89, 182);">
                <div class="content">
                    <h4 class="title-white">Data Attribut</h4>
                <hr>
                @foreach ($attributData as $data)
                <font class="white-color">
                    <h5> Modal : {{ $data->modal }}</h5>
                    <h5> Gerai : {{ $data->gerai }}</h5>
                    <h5> Bep : {{ $data->bep }}</h5>
                    <h5> Fee : {{ $data->fee }}</h5>
                    <h5> Keuntungan : {{ $data->keuntungan }}</h5>
                    <hr/>
                </font>
                    <a href="{{ url('/attribut') }}" class="white-color"><i class="lnr lnr-chevron-right-circle"></i> Lihat Data</a>
                @endforeach
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">5 Waralaba Rekomendasi</h4>
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
                                    <td><a href="{{ url('/result') }}"><i class="lnr lnr-chevron-right-circle"></i> Lihat Semua </a></td>
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
