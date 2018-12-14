<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Grade::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grade = new Grade();
        $grade->course_id = $request->course_id;
        $grade->user_id = $request->user_id;
        $grade->term = $request->description;
        $grade->paper1 = $request->price;
        $grade->paper2 = $request->teacher_id;
        $grade->paper3 = $resquest->paper3;
        $grade->paper4 = $resquest->paper4;
        $grande->description = $request->description;
        $grade->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $grade = Grade::find($id);
         $grade->term = $request->description;
         $grade->paper1 = $request->price;
         $grade->paper2 = $request->teacher_id;
         $grade->paper3 = $resquest->paper3;
         $grade->paper4 = $resquest->paper4;
         $grande->description = $request->description;
         $grade->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grade::find($grade->id);
        $grade->delete();
    }
}
