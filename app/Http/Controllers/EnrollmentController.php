<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Enrollment;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;



class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments', $enrollments);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enrollments = Enrollment::pluck('enroll_num', 'id');
        $batches = Batch::pluck('name', 'id');
        $students = Student::pluck('name', 'id');
        return view('enrollments.create', compact('enrollments','batches', 'students',));
        //return view('enrollments.create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'enroll_num' => 'required|string|max:255',
            'batch_id' => 'required|integer',
            'student_id' => 'required|integer',
            'join_date' => 'required|date',
            'fee' => 'required|numeric',
        ]);

        $input = $request->all();
        Log::info($input);
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollments=Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments=Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments', $enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollments=Enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!');

    }
}
