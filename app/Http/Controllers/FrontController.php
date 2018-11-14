<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
      return view('frontend.home');
    }
    public function show($name)
    {
      retunr view('frontend.curso');
    }
    public function work()
    {
      return view('frontend.work-with-us');
    }
    public function login($datos)
    {
      return view('frontend.login');
    }
    public function logout($datos)
    {
      return view('frontend.logout');
    }
}
