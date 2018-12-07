<?php

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'FrontController@home');
Route::get('curso/{name?}', 'FrontController@show');
Route::get('work-with-us', 'FrontController@work');
// Route::get('login', 'FrontController@login');
// Route::post('logout', 'FrontController@logout');
// Route::get('register', 'FrontController@register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Profesores
Route::post('/addteacher', 'TeacherController@add')->name('addteacher');
Route::get('/teachers', 'TeacherController@show');

// Cursos Vistas
Route::post('/addcourse', 'CourseController@add')->name('addcourse');
Route::get('/courses', 'CourseController@show');

// Alumnos
Route::get('/students', 'StudentController@studentList');


// Cursos Vistas
Route::post('/addgrade', 'GradeController@add')->name('addgrade');
Route::get('/grades', 'GradeController@show');
