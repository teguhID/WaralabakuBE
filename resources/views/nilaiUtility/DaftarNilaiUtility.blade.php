@extends('layout/layout')
@section('title')
    Data Nilai Utility
@endsection
@section('content')
<h4>Data Nilai Utility</h4></br></br>

    <table class="table table-hover">
        <thead>
            <tr>
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
                <td>{{$datas->nama}}</td>
                <td>{{$datas->modal}}</td>
                <td>{{$datas->gerai}}</td>
                <td>{{$datas->bep}}</td>
                <td>{{$datas->fee}}</td>
                <td>{{$datas->keuntungan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection