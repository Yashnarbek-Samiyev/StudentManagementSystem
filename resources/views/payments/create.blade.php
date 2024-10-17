@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Payments</div>
        <div class="card-body">
            <form action="{{ url('/payments') }}" method="post">
                {!! csrf_field() !!}

                <label for="enrollment_id">Enrollment</label><br>
                <select name="enrollment_id" id="enrollment_id" class="form-control" onchange="updateFee()">
                    <option value="">Select Enrollment</option>
                    @foreach($enrollments_info as $item)
                        <option value="{{ $item->id }}" data-fee="{{ $item->fee }}">
                            {{ $item->enroll_num }}
                        </option>
                    @endforeach
                </select>

                <label for="fee">Fee</label><br>
                <input type="text" name="amount" id="amount" class="form-control" readonly>


                <label for="">Batch</label><br>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach($batches as $id=>$name)
                        <option value="{{$id}}">
                            {{$name}}
                        </option>
                    @endforeach
                </select>
                <label for="">Student</label><br>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    @foreach($students as $id=>$name)
                        <option value="{{$id}}">
                            {{$name}}
                        </option>
                    @endforeach
                </select>



                <label for="">Paid Date</label><br>
                <input type="date" name="paid_date" id="paid_date" class="form-control">

{{--                <label for="">Amount</label><br>--}}
{{--                <input type="text" name="amount" value="" id="amount" class="form-control"> <br>--}}
{{--                <select name="amount" id="amount" class="form-control">--}}
{{--                    @foreach($en) @endforeach--}}
{{--                </select>--}}


                <input type="submit" value="Save" class="btn btn-success"><br>

            </form>
        </div>
    </div>

    <script>
        function updateFee() {
            const enrollmentSelect = document.getElementById('enrollment_id');
            const feeInput = document.getElementById('amount');

            // Get selected option
            const selectedOption = enrollmentSelect.options[enrollmentSelect.selectedIndex];

            // Set fee input value to the fee data attribute, if it exists
            if (selectedOption) {
                feeInput.value = selectedOption.dataset.fee || '';
            } else {
                feeInput.value = ''; // Reset fee if no option is selected
            }
        }
    </script>

@stop


