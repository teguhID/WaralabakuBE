<?php $no = 1; ?>
@extends('layout/layout')
@section('title')
    Data Nilai Utility
@endsection
@section('dashboardTitle')
    Data Nilai Utility
@endsection
@section('content')
    <table class="table table-hover" id="utilityTable">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>modal</th>
                <th>gerai</th>
                <th>bep</th>
                <th>fee</th>
                <th>keuntungan</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($data as $datas)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$datas->nama}}</td>
                <td>{{$datas->modalUtility}}</td>
                <td>{{$datas->geraiUtility}}</td>
                <td>{{$datas->bepUtility}}</td>
                <td>{{$datas->feeUtility}}</td>
                <td>{{$datas->keuntunganUtility}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#dnuLi').removeClass('inactive').addClass('active');
                $('#utilityTable').DataTable();
            });
        </script>
@endsection