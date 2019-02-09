@extends('layout/layout')
@section('title')
    Bobot
@endsection
@section('dashboardTitle')
    Data Bobot
@endsection
@section('content')
<div class="col-md-4">    
    <form action="{{ url('bobot/' . $data->id) }}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <label>Modal</label></br>
        <input type="text" name="modal" class="form-control border-input" value="{{ $data->modal }}">
        <label>Gerai</label></br>
        <input type="text" name="gerai" class="form-control border-input" value="{{ $data->gerai }}">
        <label>Perkiraan BEP</label></br>
        <input type="text" name="bep" class="form-control border-input" value="{{ $data->bep }}">
        <label>Franchise Fee</label></br>
        <input type="text" name="fee" class="form-control border-input" value="{{ $data->fee }}">
        <label>Keuntungan</label></br>
        <input type="text" name="keuntungan" class="form-control border-input" value="{{ $data->keuntungan }}">
        </br><input type="submit" class="btn btn-primary btn-lg" value="Submit"></br></br>
    </form>
</div>
    <div class="col-md-2"></div>
    <div class="col-md-6">
        <h4 class="title">Noted</h4>
        <hr>       
        <p>Dengan mengubah nilai Bobot Maka Otomatis mengubah nilai Normalisasi</p>
    </div> 
<script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#dboLi').removeClass('inactive').addClass('active');
        });
    </script>
@endsection