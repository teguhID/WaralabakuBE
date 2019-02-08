@extends('layout/layout')
@section('title')
    Attribut
@endsection
@section('content')
<h4>Attribut</h4></br></br>
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
        
        <a href="{{ url('/attribut/' . $data->id . '/edit')}}" class="btn btn-success">Edit</a></br></br>  
        
        <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#daLi').removeClass('inactive').addClass('active');
            });
        </script>
@endsection