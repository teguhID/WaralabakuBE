@extends('layout/layout')
@section('title')
    Data Result
@endsection
@section('content')
<h4>Data Result</h4></br></br>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>nama</th>
                <th>nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $datas)
            <tr>
                <td>{{$datas->nama}}</td>
                <td>{{$datas->hasil}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection