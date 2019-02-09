@extends('layout/layout')
@section('title')
    Bobot
@endsection
@section('dashboardTitle')
    Bobot
@endsection
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="content">
                <h4 class="title">Data Bobot</h4>
            <hr>
            <font color="#858585">
                <h5> Modal : {{ $data->modal }}</h5>
                <h5> Gerai : {{ $data->gerai }}</h5>
                <h5> Bep : {{ $data->bep }}</h5>
                <h5> Fee : {{ $data->fee }}</h5>
                <h5> Keuntungan : {{ $data->keuntungan }}</h5>
                <hr>
            </font>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="content">
                <h4 class="title">Data Normalisasi</h4>
            <hr>
            <font color="#858585">
                <h5> Modal : {{ $data->modalNorm }}</h5>
                <h5> Gerai : {{ $data->geraiNorm }}</h5>
                <h5> Bep : {{ $data->bepNorm }}</h5>
                <h5> Fee : {{ $data->feeNorm }}</h5>
                <h5> Keuntungan : {{ $data->keuntunganNorm }}</h5>
                <hr/>
            </font>
            </div>
        </div>
    </div>
</div>
<a href="{{ url('/bobot/' . $data->id . '/edit')}}" class="btn btn-success btn-lg">Edit</a>
    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dboLi').removeClass('inactive').addClass('active');
        });
    </script>

@endsection