<?php $no = 1; ?>
@extends('layout/layout')
@section('title')
    Data Waralaba
@endsection
@section('dashboardTitle')
    Data Waralaba
@endsection
@section('content')
<a href="{{ url('/datawaralaba/create') }}" class="btn btn-success btn-lg">Input Data Baru</a></br></br>  
    <table class="table table-hover" id="tableWaralaba">
        <thead>
            <tr>
                <th>no</th>
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
                <td>{{$no++}}</td>
                <td><a href="{{ url('/datawaralaba/' . $datas->id) }}">{{$datas->nama}}</a></td>
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
                    <a href="{{ url('/datawaralaba/' . $datas->id) . '/edit' }}" class="btn btn-info btn-xs"> Edit </a>
                    
                    <form action="{{ url('datawaralaba/' . $datas->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-warning btn-xs" onclick="return confirm('Yakin Ingin Hapus Data {{ $datas->nama }} ?')" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    

    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dwLi').removeClass('inactive').addClass('active');
            $('#tableWaralaba').DataTable();
        });
    </script>

@endsection