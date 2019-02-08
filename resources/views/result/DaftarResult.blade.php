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
    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dhLi').removeClass('inactive').addClass('active');
        });
    </script>

@endsection