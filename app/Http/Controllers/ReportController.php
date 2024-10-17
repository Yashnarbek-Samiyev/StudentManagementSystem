<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use App\Models\Payment;


class ReportController extends Controller
{

    public function report1()
    {
        // Your logic for report1 goes here
        $payments = Payment::all();
        // Example: get all payments
        return view('reports.main', compact('payments')); // Adjust as needed
    }
}
