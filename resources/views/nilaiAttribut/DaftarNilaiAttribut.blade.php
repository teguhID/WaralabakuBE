@extends('layout/layout')
@section('title')
    Daftar Nilai Attribut
@endsection
@section('content')
    {{ $data['modal'] }}
    {{ $data['gerai'] }}
    {{ $data['bep'] }}   
    {{ $data['fee'] }}    
    {{ $data['keuntungan'] }}
@endsection