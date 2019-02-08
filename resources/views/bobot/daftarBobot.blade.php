@extends('layout/layout')
@section('title')
    Bobot
@endsection
@section('content')
<h4>Data Bobot</h4></br></br>
        <label>modal = </label>
        <label>{{$data->modal}}</label></br>
        <label>gerai = </label>
        <label>{{$data->gerai}}</label></br>
        <label>bep = </label>
        <label>{{$data->bep}}</label></br>
        <label>fee = </label>
        <label>{{$data->fee}}</label></br>
        <label>keuntungan = </label>
        <label>{{$data->keuntungan}}</label></br></br>
        <label>Normalisasi Modal = </label>
        <label>{{$data->modalNorm}}</label></br>
        <label>Normalisasi Gerai = </label>
        <label>{{$data->geraiNorm}}</label></br>
        <label>Normalisasi Bep = </label>
        <label>{{$data->bepNorm}}</label></br>
        <label>Normalisasi Fee = </label>
        <label>{{$data->feeNorm}}</label></br>
        <label>Normalisasi Keuntungan = </label>
        <label>{{$data->keuntunganNorm}}</label></br></br>
        
        <a href="{{ url('/bobot/' . $data->id . '/edit')}}" class="btn btn-success">Edit</a></br></br>  

    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dboLi').removeClass('inactive').addClass('active');
        });
    </script>

@endsection