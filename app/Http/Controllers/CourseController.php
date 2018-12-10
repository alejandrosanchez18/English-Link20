<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;

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
       $teachers= User::whereHas('roles', function($query){
       $query->where('name', 'teacher');
       })->get();
       $students = User::whereHas('roles', function($query){
       $query->where('name', 'student');
       })->get();
       return view('back.courses', compact('courses', 'teachers', 'students'));
   }





// -----------------------------------------------------



       public function addCourse(Request $request){
         $rules = array(
           'name' => 'required',
           'price' => 'float',
           'description' => 'text',
         );
       $validator = Validator::make ( Input::all(), $rules);
       if ($validator->fails())
       return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

       else {
         $course = new Course;
         $course->name = $request->name;
         $course->description = $request->description;
         $course->price = $request->price;
         $course->save();
         return response()->json($course);
       }
   }

   public function editCourse(request $request){
     $course = Course::find ($request->id);
     $course->name = $request->name;
     $course->price = $request->price;
     $course->description = $request->description;
     $course->save();
     return response()->json($course);
   }

   public function deleteCourse(request $request){
     $course = Course::find($request->id)->softDelete();
     return response()->json();
   }
















}
