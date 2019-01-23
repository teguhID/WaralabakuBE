@extends('layout/layout')
@section('title')
    Bobot
@endsection
@section('content')
<h4>Data Bobot</h4></br></br>
<div class="col-md-4">    
    <form>
        {{ csrf_field() }}
        <label>Modal</label></br>
        <input type="text" name="modal" class="form-control">
        <label>Gerai</label></br>
        <input type="text" name="gerai" class="form-control">
        <label>Perkiraan BEP</label></br>
        <input type="text" name="bep" class="form-control">
        <label>Franchise Fee</label></br>
        <input type="text" name="fee" class="form-control">
        <label>Keuntungan</label></br>
        <input type="text" name="keuntungan" class="form-control">
    </form>
        
    </br><a href="{{ url('#') }}" class="btn btn-success">Edit</a></br></br>  
</div>
@endsection