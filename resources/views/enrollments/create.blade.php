@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Enrollment Page</div>
        <div class="card-body">
            <form action="{{ url('/enrollments') }}" method="post">
                {!! csrf_field() !!}
                <label for="">Ennroll num</label><br>
                <input type="number" name="enroll_num" id="enroll_num" class="form-control">
                <label for="">Batch</label><br>
                <select name="batch_id" id="batch_id" class="form-control">
                    @foreach($batches as $id=>$name)
                        <option value="{{$id}}">
                            {{$name}}
                        </option>
                    @endforeach
                </select>

                <label for="">Student</label><br>
                <select name="student_id" id="student_id" class="form-control">
                    @foreach($students as $id=>$name)
                        <option value="{{$id}}">
                            {{$name}}
                        </option>
                    @endforeach
                </select>

                <label for="">Join Date</label><br>
                <input type="date" name="join_date" id="join_date" class="form-control"> <br>

                <label for="">Fee</label><br>
                <input type="text" name="fee" id="fee" class="form-control">

                <input type="submit" value="Save" class="btn btn-success"><br>

            </form>
        </div>
    </div>


@stop

