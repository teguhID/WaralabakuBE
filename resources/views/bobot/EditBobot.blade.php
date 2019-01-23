@extends('layout/layout')
@section('title')
    Bobot
@endsection
@section('content')
<h4>Data Bobot</h4></br></br>
<div class="col-md-4">    
    <form action="{{ url('bobot/' . $data->id) }}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <label>Modal</label></br>
        <input type="text" name="modal" class="form-control" value="{{ $data->modal }}">
        <label>Gerai</label></br>
        <input type="text" name="gerai" class="form-control" value="{{ $data->gerai }}">
        <label>Perkiraan BEP</label></br>
        <input type="text" name="bep" class="form-control" value="{{ $data->bep }}">
        <label>Franchise Fee</label></br>
        <input type="text" name="fee" class="form-control" value="{{ $data->fee }}">
        <label>Keuntungan</label></br>
        <input type="text" name="keuntungan" class="form-control" value="{{ $data->keuntungan }}">
        </br><input type="submit" class="btn btn-danger" value="Submit"></br></br>
    </form>
</div>
@endsection