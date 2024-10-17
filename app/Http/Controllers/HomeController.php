<?php

namespace App\Http\Controllers;

use app\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
     $teacher =  Teacher::all();
      return view('home',compact('teacher'));
  }
}
