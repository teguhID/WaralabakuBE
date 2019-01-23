@extends('layout/layout')
@section('title')
    Data Waralaba
@endsection
@section('content')

    <table class="table table-hover">
        <thead>
            <tr>
                <th>nama</th>
                <th>alamat</th>
                <th>jenis</th>
                <th>telephone</th>
                <th>email</th>
                <th>web</th>
                <th>modal</th>
                <th>gerai</th>
                <th>bep</th>
                <th>fee</th>
                <th>keuntungan</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $datas)
            <tr>
                <td>{{$datas->nama}}</td>
                <td>{{$datas->alamat}}</td>
                <td>{{$datas->jenis}}</td>
                <td>{{$datas->phone}}</td>
                <td>{{$datas->email}}</td>
                <td>{{$datas->web}}</td>
                <td>{{$datas->modal}}</td>
                <td>{{$datas->gerai}}</td>
                <td>{{$datas->bep}}</td>
                <td>{{$datas->fee}}</td>
                <td>{{$datas->keuntungan}}</td>
                <td>
                    <button class="btn btn-info">Edit</button>
                    <button class="btn btn-warning">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection