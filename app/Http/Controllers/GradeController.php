<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Grade;

class GradeController extends Controller
{
    public function add(){

   }
   public function show(){

         return view('back.grades', compact($grades));
      }
}
