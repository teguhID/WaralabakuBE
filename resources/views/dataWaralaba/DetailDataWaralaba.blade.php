@extends('/resources/views/layout/layout.blade.php')
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$data->nama}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->jenis}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->web}}</td>
                <td>{{$data->modal}}</td>
                <td>{{$data->gerai}}</td>
                <td>{{$data->bep}}</td>
                <td>{{$data->fee}}</td>
                <td>{{$data->keuntungan}}</td>
            </tr>
        </tbody>
    </table>

    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dwLi').removeClass('inactive').addClass('active');
        });
    </script>
@endsection