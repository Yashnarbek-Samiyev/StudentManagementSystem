@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Batches</div>
        <div class="card-body">
            <div class="card-body">

                <h5 class="card-title">Name:{{$batches->name}}</h5>
                <p class="card-text">Course_id:{{$batches->course->name}}</p>
                <p class="card-text">Start_date:{{$batches->start_date}}</p>

            </div>
            <hr>
        </div>

    </div>


@endsection

