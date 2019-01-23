@extends('layout/layout')
@section('title')
    Input Data Waralaba
@endsection
@section('content')

    <form action="{{ url('datawaralaba') }}" method="POST">
        {{ csrf_field() }}
        <label>Nama</label></br>
        <input type="text" name="nama" class="form-control">
        <label>Alamat</label></br>
        <input type="text" name="alamat" class="form-control">
        <input type="submit" class="btn btn-danger" value="Submit">
    </form>
    
@endsection