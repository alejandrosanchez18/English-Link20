<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Role;

class StudentController extends Controller
{
      public function studentList(){

      $students = User::whereHas('roles', function($query){
      $query->where('name', 'student');
      })->get();


            return view('back.students', compact('students'));
     }


     //
     // \User::with(['roles' => function ($query) {
     //     $query->where('name', 'admin'); //donde name es la columna de la tabla rol
     // }])->get();

// public function studentList(Request $request)
// {
//     if ($request->ajax()) {
//         $query = App\Role::with('users')->where('role_id', 2)->select('users.*');
//
//         return $this->dataTable->eloquent($query)
//             ->make(true);
//     }
//
//     return view('back.students', [
//         'title'      => 'Morph To Many Demo',
//         'controller' => 'Relation Controller',
//     ]);
// }













      // $movies = Movie::whereNotNull('genre_id')
      //       ->orderBy('title')
      //       ->paginate(25)
      //   ;
}
