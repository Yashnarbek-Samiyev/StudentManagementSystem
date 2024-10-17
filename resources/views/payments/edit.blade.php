@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Page</div>
        <div class="card-body">
            <form action="{{ url('payments/' .$payments->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{$payments->id}}">

                <label for="">Enrolment</label><br>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach($enrollments as $id=>$name)
                        <option value="{{$id}}">
                            {{$name}}
                        </option>
                    @endforeach
                </select>



                <label for="">Paid Date</label><br>
                <input type="date" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control">

                <label for="">Amount</label><br>
                <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"><br>

                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>


        </div>
    </div>
@endsection
