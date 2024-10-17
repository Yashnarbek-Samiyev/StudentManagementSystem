@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{$enrollments->id}}">

                <label for="">Enroll No</label><br>
                <input type="text" id="enroll_num" name="enroll_num" value="{{$enrollments->enroll_num}}" class="form-control" required><br>

                <label for="">Batch</label><br>
                <input type="text" name="batch_id" id="batch_id" value="{{$enrollments->batch_id}}" class="form-control">

                <label for="">Student</label><br>
                <input type="text" name="student_id" id="student_id" value="{{$enrollments->student_id}}" class="form-control"><br>

                <label for="">Join Date</label><br>
                <input type="date" name="join_date" id="join_date" value="{{$enrollments->join_date}}" class="form-control"><br>

                <label for="">Fee</label><br>
                <input type="text" name="fee" id="fee" value="{{$enrollments->fee}}" class="form-control"><br>

                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>


        </div>
    </div>
@endsection
