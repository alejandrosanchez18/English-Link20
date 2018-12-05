<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;
use App\User;

class CourseController extends Controller
{
      public function add(){
       $datos = request()->all();
       Course::create($datos);
       return redirect('/courses');

    }
    public function show(){
       $courses = Course::all();
       $teachers = User::where('role', 2)->get();
       return view('back.courses', compact('courses', 'teachers'));
   }
}
