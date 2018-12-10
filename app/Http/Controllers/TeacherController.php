<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;

class TeacherController extends Controller
{
    public function add(){
      $datos = request()->all();
      User::create($datos);
      return redirect('/teachers');

   }
   public function show(){
         $teachers = User::whereHas('roles', function($query){
         $query->where('name', 'teacher');
         })->get();
      $courses = Course::all();
      return view('back.teachers', compact('teachers', 'courses'));
  }
}
