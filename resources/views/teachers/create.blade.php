@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Teacher Page</div>
        <div class="card-body">
            <form action="{{ url('teachers') }}" method="post">
                {!! csrf_field() !!}
                <label for="">Name</label><br>
                <input type="text" name="name" id="name" class="form-control">
                <label for="">Address</label><br>
                <input type="text" name="address" id="address" class="form-control">
                <label for="">Mobile</label><br>
                <input type="text" name="mobile" id="mobile" class="form-control"> <br>
                <input type="submit" value="Save" class="btn btn-success"><br>

            </form>
        </div>
    </div>


@stop

