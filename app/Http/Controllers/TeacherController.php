<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TeacherController extends Controller
{
    public function add(){
      $datos = request()->all();
      User::create($datos);
      return redirect('/teachers');

   }
   public function show(){
      $teachers = User::where('role', 2)->get();
      return view('back.teachers', compact('teachers'));
  }
}
