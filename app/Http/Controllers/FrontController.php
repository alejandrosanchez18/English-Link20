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
      return view('frontend.curso');
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
