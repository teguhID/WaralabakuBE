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
        
        <a href="{{ url('/bobot/create') }}" class="btn btn-success">Edit</a></br></br>  

@endsection