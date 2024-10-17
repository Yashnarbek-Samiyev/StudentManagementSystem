@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ url('courses/' .$courses->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{$courses->id}}">
                <label for="">Name</label><br>
                <input type="text" id="name" name="name" value="{{$courses->name}}" class="form-control"><br>
                <label for="">Syllabus</label><br>
                <input type="text" name="Syllabus" id="syllabus" value="{{$courses->syllabus}}" class="form-control">
                <label for="">Duration</label><br>
                <input type="number" name="Duration" id="duration" value="{{$courses->duration}}" class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>


        </div>
    </div>
@endsection
