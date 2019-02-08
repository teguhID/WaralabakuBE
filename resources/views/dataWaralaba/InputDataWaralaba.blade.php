@extends('layout/layout')
@section('title')
    Input Data Waralaba
@endsection
@section('content')
<div class="col-md-4">
    <form action="{{ url('datawaralaba') }}" method="POST">
        {{ csrf_field() }}
        
        <label>Nama</label></br>
        <input type="text" name="nama" class="form-control">
        <label>Alamat</label></br>
        <input type="text" name="alamat" class="form-control">
        <label>Jenis Waralaba</label></br>
        <input type="text" name="jenis" class="form-control">
        <label>Telephone</label></br>
        <input type="text" name="phone" class="form-control">
        <label>Email</label></br>
        <input type="text" name="email" class="form-control">
        <label>Web</label></br>
        <input type="text" name="web" class="form-control">
        <label>Modal</label></br>
        <input type="text" name="modal" class="form-control">
        <label>Gerai</label></br>
        <input type="text" name="gerai" class="form-control">
        <label>Perkiraan BEP</label></br>
        <input type="text" name="bep" class="form-control">
        <label>Franchise Fee</label></br>
        <select class="form-control" name="fee">
            <option>Ada</option>
            <option>Tidak Ada</option>
        </select>
        <label>Keuntungan</label></br>
        <input type="text" name="keuntungan" class="form-control">

    </br><input type="submit" class="btn btn-danger" value="Submit"></br></br>
    </form>
</div> 

<script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
<script type="text/javascript">
    $( document ).ready(function() {
            $('#dwLi').removeClass('inactive').addClass('active');
    });
</script>
@endsection