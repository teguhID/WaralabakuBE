@extends('layout/layout')
@section('title')
    Edit Data Waralaba
@endsection
@section('dashboardTitle')
    Edit Data Waralaba
@endsection
@section('content')
<div class="col-md-8">
    <form action="{{ url('datawaralaba/' . $data->id) }}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label>Nama</label></br>
        <input type="text" name="nama" class="form-control border-input" value="{{ $data->nama }}" required>
        <label>Alamat</label></br>
        <input type="text" name="alamat" class="form-control border-input" value="{{ $data->alamat }}" required>
        <label>Jenis Waralaba</label></br>
        <input type="text" name="jenis" class="form-control border-input" value="{{ $data->jenis }}" required>
        <label>Telephone</label></br>
        <input type="text" name="phone" class="form-control border-input" value="{{ $data->phone }}" required>
        <label>Email</label></br>
        <input type="email" name="email" class="form-control border-input" value="{{ $data->email }}" required>
        <label>Web</label></br>
        <input type="text" name="web" class="form-control border-input" value="{{ $data->web }}" required>
        <label>Modal</label></br>
        <input type="number" name="modal" class="form-control border-input" value="{{ $data->modal }}" required>
        <label>Gerai</label></br>
        <input type="number" name="gerai" class="form-control border-input" value="{{ $data->gerai }}" required>
        <label>Perkiraan BEP</label></br>
        <input type="number" name="bep" class="form-control border-input" value="{{ $data->bep }}" required>
        <label>Franchise Fee</label></br>
        <select class="form-control border-input" name="fee" id="fee">
            <option @if($data->fee == 'Ada' || $data->fee == 'ada')
                {{ 'selected' }}
            @endif >Ada</option>
            <option @if($data->fee == 'Tidak Ada' || $data->fee == 'tidak ada')
                {{ 'selected' }}
            @endif >Tidak Ada</option>
        </select>
        <label>Keuntungan</label></br>
        <input type="number" name="keuntungan" class="form-control border-input" value="{{ $data->keuntungan }}" required>

    </br><input type="submit" class="btn btn-info btn-lg" value="Submit"></br></br>
    </form>
</div>
    <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dwLi').removeClass('inactive').addClass('active');
        });
    </script>
@endsection