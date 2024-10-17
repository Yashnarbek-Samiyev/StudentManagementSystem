@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ url('students/' .$student->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{$student->id}}">
                <label for="">Name</label><br>
                <input type="text" id="name" name="name" value="{{$student->name}}" class="form-control"><br>
                <label for="">Address</label><br>
                <input type="text" name="Address" id="address" value="{{$student->address}}" class="form-control">
                <label for="">Mobile</label><br>
                <input type="text" name="mobile" id="mobile" value="{{$student->mobile}}" class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>


        </div>
    </div>
@endsection
