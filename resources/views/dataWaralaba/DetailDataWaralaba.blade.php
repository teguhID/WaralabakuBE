@extends('layout/layout')
@section('title')
    Data Waralaba
@endsection
@section('dashboardTitle')
    Detail Data {{$data->nama}}
@endsection
@section('content')

    <label>Nama : </label>{{' '}}<label>{{$data->nama}}</label></br>
    <label>Alamat : </label>{{' '}}<label>{{$data->alamat}}</label></br>
    <label>Jenis Usaha : </label>{{' '}}<label>{{$data->jenis}}</label></br>
    <label>Telephone : </label>{{' '}}<label>{{$data->phone}}</label></br>
    <label>Email : </label>{{' '}}<label>{{$data->email}}</label></br>
    <label>Web : </label>{{' '}}<label>{{$data->web}}</label></br>
    <label>Modal Awal : </label>{{' '}}<label>{{$data->modal}}</label></br>
    <label>Jumlah Gerai : </label>{{' '}}<label>{{$data->gerai}}</label></br>
    <label>Perkiraan BEP : </label>{{' '}}<label>{{$data->bep}}</label></br>
    <label>Franchise Fee : </label>{{' '}}<label>{{$data->fee}}</label></br>
    <label>Perkiraan Keuntungan Yang Di Dapat : </label>{{' '}}<label>{{$data->keuntungan}}</label></br>

    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dwLi').removeClass('inactive').addClass('active');
        });
    </script>
@endsection