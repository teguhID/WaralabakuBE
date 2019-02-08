@extends('layout/layout')
@section('title')
Attribut
@endsection
@section('content')
<h4>Attribut</h4></br></br>
<div class="col-md-4">    
    <form action="{{ url('attribut/' . $data->id) }}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <?php $fields = ['modal', 'gerai', 'bep', 'fee', 'keuntungan']; ?>

        @foreach ($fields as $field)
            <label>{{ $field }}</label></br>
                <select name={{ $field }} class="form-control">
                    @if ($data->$field == 'cost')
                        <option value="cost" selected>Cost</option>
                        <option value="benefit" >Benefit</option>
                    @else
                        <option value="cost" >Cost</option>
                        <option value="benefit" selected>Benefit</option>
                    @endif
                </select>    
        @endforeach   
    </br><input type="submit" class="btn btn-danger" value="Submit"></br></br>
    </form>
</div>

        <script src={{ asset('assets/js/jquery.min.js') }} type="text/javascript"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#daLi').removeClass('inactive').addClass('active');
            });
        </script>
@endsection