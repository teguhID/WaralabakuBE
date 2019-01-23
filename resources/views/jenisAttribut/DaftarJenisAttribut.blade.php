@extends('layout/layout')
@section('title')
    Jenis Attribut
@endsection
@section('content')
<h4>Jenis Attribut</h4></br></br>
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
        
        <a href="{{ url('/jenisattribut/' . $data->id . '/edit')}}" class="btn btn-success">Edit</a></br></br>  

@endsection