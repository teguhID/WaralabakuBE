@extends('layout/layout')
@section('title')
    Edit Data Waralaba
@endsection
@section('content')
<div class="col-md-4">
    <form action="{{ url('datawaralaba/' . $data->id) }}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label>Nama</label></br>
        <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
        <label>Alamat</label></br>
        <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}">
        <label>Jenis Waralaba</label></br>
        <input type="text" name="jenis" class="form-control" value="{{ $data->jenis }}">
        <label>Telephone</label></br>
        <input type="text" name="phone" class="form-control" value="{{ $data->phone }}">
        <label>Email</label></br>
        <input type="text" name="email" class="form-control" value="{{ $data->email }}">
        <label>Web</label></br>
        <input type="text" name="web" class="form-control" value="{{ $data->web }}">
        <label>Modal</label></br>
        <input type="text" name="modal" class="form-control" value="{{ $data->modal }}">
        <label>Gerai</label></br>
        <input type="text" name="gerai" class="form-control" value="{{ $data->gerai }}">
        <label>Perkiraan BEP</label></br>
        <input type="text" name="bep" class="form-control" value="{{ $data->bep }}">
        <label>Franchise Fee</label></br>
        <select class="form-control" name="fee" id="fee">
            <option @if($data->fee == 'Ada' || $data->fee == 'ada')
                {{ 'selected' }}
            @endif >Ada</option>
            <option @if($data->fee == 'Tidak Ada' || $data->fee == 'tidak ada')
                {{ 'selected' }}
            @endif >Tidak Ada</option>
        </select>
        <label>Keuntungan</label></br>
        <input type="text" name="keuntungan" class="form-control" value="{{ $data->keuntungan }}">

    </br><input type="submit" class="btn btn-danger" value="Submit"></br></br>
    </form>
</div>
@endsection