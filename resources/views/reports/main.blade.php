@extends('layout')
@section('content')


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        hr {
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

    <h1>Payment Receipt</h1>
    <hr/>
    <p>Receipt No: <b>{{ $pid }}</b></p>
    <p>Date: <b>{{ $payment->paid_date }}</b></p>
    <p>Enrollment No: <b>{{ $payment->enrollment_id }}</b></p>
    <p>Student Name: <b>{{ $payment->enrollments->student->name }}</b></p>

    <hr/>

    <table>
        <tr>
            <th>Description</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Payment for Enrollment</td>
            <td><b>{{ $payment->amount }}</b></td>
        </tr>
    </table>
@endsection('content')
