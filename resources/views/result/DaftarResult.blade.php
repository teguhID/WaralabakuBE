<?php $no = 1; ?>
@extends('layout/layout')
@section('title')
    Data Result
@endsection
@section('dashboardTitle')
    Data Result
@endsection
@section('content')
    <table class="table table-hover" id="tableResult">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $datas)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$datas->nama}}</td>
                <td>{{$datas->hasil}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dhLi').removeClass('inactive').addClass('active');
            $('#tableResult').DataTable();
        });
    </script>

@endsection