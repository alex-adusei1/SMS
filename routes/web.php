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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/classroom/index', function(){
//     return view('classroom.create');
// })->middleware('auth');

// Route::post('/classroom','ClassroomsController@store');
// Route::get('/classroom/index','ClassroomsController@index');
// Route::delete('classroom/index/delete/{id}','ClassroomsController@destroy');
// Route::post('classroom/index/{id}', 'ClassroomsController@update');
// Route::put('classroom/index/update/{id}', 'ClassroomsController@update');
Route::get('/classroom','ClassroomsController@index')->middleware('auth');
Route::post('/classroom/store','ClassroomsController@store')->middleware('auth');
Route::delete('classroom/delete/{id}','ClassroomsController@destroy')->middleware('auth');
Route::put('classroom/update/{id}', 'ClassroomsController@update')->middleware('auth');
Route::get('classroom/getclass', 'ClassroomsController@loadclass')->middleware('auth');