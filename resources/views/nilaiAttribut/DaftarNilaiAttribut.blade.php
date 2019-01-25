@extends('layout/layout')
@section('title')
    Daftar Nilai Attribut
@endsection
@section('content') 
    <h4>Jenis Attribut</h4></br></br>
    <label>Nilai Attribut Modal = </label>
    <label>{{ $data['modal'] }}</label></br>
    <label>Nilai Attribut Gerai = </label>
    <label>{{ $data['gerai'] }}</label></br>
    <label>Nilai Attribut BEP = </label>
    <label>{{ $data['bep'] }}</label></br>
    <label>Nilai Attribut Franchise Fee = </label>
    <label>{{ $data['fee'] }}</label></br>
    <label>Nilai Attribut Keuntungan = </label>
    <label>{{ $data['keuntungan'] }}</label></br>
@endsection