<?php

Route::get('/', function(){
      $students = App\User::all();
      return view('welcome', compact('students'));
}
);


// // Route::get('/', 'FrontController@home');
// Route::get('curso/{name?}', 'FrontController@show');
// Route::get('work-with-us', 'FrontController@work');
// // Route::get('login', 'FrontController@login');
// // Route::post('logout', 'FrontController@logout');
// // Route::get('register', 'FrontController@register');
//
Auth::routes();
//
Route::get('/home', 'HomeController@index')->name('home');
//
//
// //Profesores
// Route::post('/addteacher', 'TeacherController@add')->name('addteacher');
// Route::get('/teachers', 'TeacherController@show');
//
// // Cursos Vistas
// Route::post('/addcourse', 'CourseController@add')->name('addcourse');
// Route::get('/courses', 'CourseController@show');
// Route::get('/courses/{id?}', 'CourseController@edit');
//
// // Cursos PopUp Edit, Add, Delete
//  Route::post('addCourse','CourseController@addCourse');
//  Route::post('editCourse','CourseController@editCourse');
//  Route::post('deleteCourse','CourseController@deleteCourse');
//
// // Alumnos
// Route::get('/students', 'StudentController@studentList')->middleware('auth', 'role:admin');
//
//
// // Notas  Vistas
// Route::post('/addgrade', 'GradeController@add')->name('addgrade');
// Route::get('/grades', 'GradeController@show');




// ---------------------------------------
Route::apiResources([
    'courses' => 'API\CourseController',
    'users' => 'API\UserController',
    'payments' => 'API\PaymentController',
    'grades' => 'API\GradeController',
    'teachers' => 'API\TeacherController',
]);


// Route::apiResource('courdes', 'API\GradeController');
