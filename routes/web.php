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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/student',function(){
    return "Student";
});

//Route::get('/teacher',function(){
//  return view('admin.teacher.dashboard');
//})->middleware('auth');

Route::get('/teacher','TeacherController@index')->name('teacher_index')->middleware('auth');

Route::get('/teacher-download','TeacherController@download')->name('teacher_download')->middleware('auth');

Route::post('/teacher-import','TeacherController@importcsv')->name('teacher_import')->middleware('auth');

Route::get('/teacher-export','TeacherController@exportcsv')->name('teacher_export')->middleware('auth');

Route::resource('/teachers','TeacherController');

//route for schools
Route::get('/lower_primary','SchoolController@lowerPrimary')->name('lower')->middleware('auth');

Route::get('/upper_primary','SchoolController@upperPrimary')->name('upper')->middleware('auth');

Route::get('/jhs/','SchoolController@jhs')->name('jhs')->middleware('auth');

Route::get('/shs/','SchoolController@shs')->name('shs')->middleware('auth');

Route::get('/tertiary','SchoolController@tertiary')->name('tertiary')->middleware('auth');



























//
// // Route for teacher
// Route::middleware('auth')->group(['prefix'=>'teachers', 'as'=>'teachers'], function(){
//   Route::get('/teacher/download',['as'=>'download', 'uses'=>'TeacherController@download']);
//   Route::post('/teacher/import', ['as'=>'teacher_import','uses'=>'TeacherController@importcsv']);
//   Route::get('/teacher/export',['as'=>'teacher_export', 'uses'=>'TeacherController@exportcsv']);
//   Route::post('/teacher/add',[]);
// });
//
// // Route for classroom
// Route::middleware('auth')->group(['prefix'=>'classrooms','as'=>'classrooms'], function(){
//
// });
//
// //Route for students
// Route::middleware('auth')->group(['prefix'=>'students', 'as'=>'students'], function(){
//
// });
//
// // Route for reports
// Route::middleware('auth')->group(['prefix'=>'reports','as'=>'reports'], function(){
//
// });
// // Route for promotions
// Route::middleware('auth')->group(['prefix'=>'promotions', 'as'=>'promotions'], function(){
//
// });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
// // clients
// // Route::group(['prefix' => 'clients', 'as' => 'clients.'], function () {
// //     Route::get('', ['as' => 'index', 'uses' => 'ClientsController@index']);
// //     Route::get('create', ['as' => 'create', 'uses' => 'ClientsController@create']);
// //     Route::post('store', ['as' => 'store', 'uses' => 'ClientsController@store']);
// //     Route::get('{client}', ['as' => 'show', 'uses' => 'ClientsController@show']);
// //     Route::put('{client}', ['as' => 'update', 'uses' => 'ClientsController@update']);
// //     Route::get('{client}/edit', ['as' => 'edit', 'uses' => 'ClientsController@edit']);
// //     Route::get('{client}/transactions/download', [
// //         'as' => 'transactions.download', 'uses' => 'ClientTransactionsController@downloadClientTransactions'
// //     ]);
// // });
