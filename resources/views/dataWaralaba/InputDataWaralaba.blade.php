@extends('layout/layout')
@section('title')
    Input Data Waralaba
@endsection
@section('dashboardTitle')
    Input Data Waralaba
@endsection
@section('content')
<div class="col-md-8">
    <form action="{{ url('datawaralaba') }}" method="POST">
        {{ csrf_field() }}
        
        <label>Nama</label></br>
        <input type="text" name="nama" class="form-control border-input" required>
        <label>Alamat</label></br>
        <input type="text" name="alamat" class="form-control border-input" required>
        <label>Jenis Waralaba</label></br>
        <input type="text" name="jenis" class="form-control border-input"required>
        <label>Telephone</label></br>
        <input type="text" name="phone" class="form-control border-input"required>
        <label>Email</label></br>
        <input type="email" name="email" class="form-control border-input"required>
        <label>Web</label></br>
        <input type="text" name="web" class="form-control border-input"required>
        <label>Modal</label></br>
        <input type="number" name="modal" class="form-control border-input"required>
        <label>Gerai</label></br>
        <input type="number" name="gerai" class="form-control border-input"required>
        <label>Perkiraan BEP</label></br>
        <input type="number" name="bep" class="form-control border-input"required>
        <label>Franchise Fee</label></br>
        <select class="form-control border-input" name="fee">
            <option>Ada</option>
            <option>Tidak Ada</option>
        </select>
        <label>Keuntungan</label></br>
        <input type="number" name="keuntungan" class="form-control border-input" required>

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