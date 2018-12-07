<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;

class CourseController extends Controller
{
      public function add(){
       $datos = request()->all();
        $course = Course::create($datos);
       $course->users()->sync(request()->input('users'));
       return redirect('/courses');

    }
    public function show(){
       $courses = Course::all();
       $teachers = User::where('role', 2)->get();
       $students = User::where('role', 3)->get();
       return view('back.courses', compact('courses', 'teachers', 'students'));
   }
}


// public function create()
//     {
//         $actors = \App\Actor::all();
//         $genres = \App\Genre::all();
//     	return view('movies.create', compact('actors', 'genres'));
//     }
