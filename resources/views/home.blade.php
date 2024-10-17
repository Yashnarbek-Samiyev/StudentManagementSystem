@extends('layout')
@section('content')
    <h1>Asosiy sahifa</h1>

    @foreach($teacher as $item)

       <h4> {{$item->name}}</h4>
    @endforeach

@endsection
