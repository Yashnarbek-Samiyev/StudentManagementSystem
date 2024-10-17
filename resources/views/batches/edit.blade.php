@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ url('batches/' .$batches->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{$batches->id}}">
                <label for="">Name</label><br>
                <input type="text" id="name" name="name" value="{{$batches->name}}" class="form-control"><br>

                <label for="">Course ID</label><br>
                <input type="number" name="Course_id" id="course_id" value="{{$batches->course->name}}" class="form-control">

                <label for="">Start Date</label><br>
                <input type="date" name="Start_date" id="start_date" value="{{$batches->start_date}}" class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>


        </div>
    </div>
@endsection
