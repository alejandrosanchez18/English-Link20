<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentController extends Controller
{
      public function studentList(){
            $students = User::where('role', 3)->get();
            // $student = User::find(1);


            return view('back.students', compact('students'));
     }





      // $movies = Movie::whereNotNull('genre_id')
      //       ->orderBy('title')
      //       ->paginate(25)
      //   ;
}
