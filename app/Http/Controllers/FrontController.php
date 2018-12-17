<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;

class FrontController extends Controller
{
    public function home()
    {
      return view('panel.app');
    }
    public function show($slug)
    {
      $curso = Option::where('slug', $slug)->first();
      return view('frontend.course', compact('curso'));
    }
    public function work()
    {
      return view('frontend.work-with-us');
    }
    public function login()
    {
      return view('frontend.login');
    }
    public function logout($datos)
    {
      return view('frontend.logout');
    }
    public function register()
    {
      return view('frontend.register');
    }
}
