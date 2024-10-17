<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Barcha talabalarni ko'rsatish (READ)
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }
    // Yangi talaba yaratish (CREATE)
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student, 201);
    }
    // Ma'lum bir talabani ko'rsatish (READ)
    public function show($id)
    {
        $student = Student::find($id);
        if ($student) {
            return response()->json($student);
        } else {
            return response()->json(['error' => 'Student not found'], 404);
        }
    }
    // Talabani yangilash (UPDATE)
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->update($request->all());
            return response()->json($student);
        } else {
            return response()->json(['error' => 'Student not found'], 404);
        }
    }
    // Talabani o'chirish (DELETE)
    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return response()->json(['message' => 'Student deleted successfully']);
        } else {
            return response()->json(['error' => 'Student not found'], 404);
        }
    }
}
