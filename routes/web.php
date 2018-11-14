<?php

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'FrontController@home');
Route::get('curso/{name?}', 'FrontController@show');
Route::get('work-with-us', 'FrontController@work');
Route::get('login', 'FrontController@login');
Route::post('logout', 'FrontController@logout');
