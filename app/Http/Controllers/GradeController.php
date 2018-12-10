<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Grade;

class GradeController extends Controller
{
    public function add(){
          $datos = request()->all();
          Grade::create($datos);
          return redirect('/grades');

   }
   public function show(){
         $students = User::whereHas('roles', function($query){
         $query->where('name', 'student');
         })->get();
         $courses = Course::all();
         return view('back.grades', compact('students', 'courses'));
      }
}
