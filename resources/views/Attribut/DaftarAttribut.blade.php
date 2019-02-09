@extends('layout/layout')
@section('title')
    Attribut
@endsection
@section('dashboardTitle')
    Data Attribut
@endsection
@section('content')
<div class="col-md-6">
    <div class="card">
        <div class="content">
            <h4 class="title">Data Attribut</h4>
        <hr>
        <font color="#858585">
            <h5> Modal : {{ $data->modal }}</h5>
            <h5> Gerai : {{ $data->gerai }}</h5>
            <h5> Bep : {{ $data->bep }}</h5>
            <h5> Fee : {{ $data->fee }}</h5>
            <h5> Keuntungan : {{ $data->keuntungan }}</h5>
            <hr/>
        </font>
        </div>
    </div>
    <a href="{{ url('/attribut/' . $data->id . '/edit')}}" class="btn btn-success btn-lg">Edit</a>
</div>

    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#daLi').removeClass('inactive').addClass('active');
            });
        </script>
@endsection