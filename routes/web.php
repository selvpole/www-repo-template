<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/todo/tasks', 'TaskController@index');
// Route::post('/todo/tasks', 'TaskController@store');

Route::resource('/todo', 'TodoController')->except([
    'show'
]);

// Route::get('/tasks', 'TaskController@index');
// Route::post('/tasks', 'TaskController@add');
//Route::delete('/tasks/{tasks}', 'TaskController@remove');

// Route::get('/todo', 'TodoController@index');
// Route::post('/todo', 'TodoController@update');
// Route::delete('/todo/{tasks}', 'TodoController@remove');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
