<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'Student Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $student = Student::findOrFail($id);
        return view('students.show')->with('student', $student);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $student = Student::findOrFail($id);
        return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::findOrFail($id);
        $input = $request->all();
        $student->update($input);
        return redirect('students')->with('flash_message', 'Student Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Student::findOrFail($id)->delete();
        return redirect('students')->with('flash_message', 'Student Deleted Successfully');

    }
}
