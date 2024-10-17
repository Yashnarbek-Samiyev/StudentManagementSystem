<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserContoller extends Controller
{
    public function index(Request $request){

        $user = Student::get();

        return response()->json($user);
    }


    public function create(Request $request){

        $name = $request->name;
        $address = $request->address;
            $phone = $request->phone;

        Student::create([
            'name' => $name,
            "address" => $address,
            "mobile" => $phone
        ]);
        return response()->json(['message' => 'create success'],201);
    }

    public function edit(Request $request){

        $name = $request->name;
        $address = $request->address;
        $phone = $request->mobile;

        Student::where('id',$request->id)->update(

            [
            'name' => $name,
            "address" => $address,
            "mobile" => $phone
             ]
        );
        return response()->json(['message' => 'update  successfully'],200);
    }
    public function show($id)
    {

        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        return response()->json($student, 200);
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);

        }
        $student->delete();
        return response()->json(['message' => 'delete successfully'],200);

    }
}
