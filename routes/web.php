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

//Home Controller
Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth']], function() {
	//Routine Controller
	Route::get('/routine/{id}', 'RoutineController@index');
	Route::POST('/routine/edit/{id}', 'RoutineController@update');
	Route::POST('/routine/edit1/{id}', 'RoutineController@update1');
	Route::get('/routine/getpdf/{id}', 'RoutineController@getPDF');



	//Resource Controller
	Route::get('/resource/{id}', 'ResourceController@index');
	Route::POST('/resource/insert/{id}', 'ResourceController@save');
	Route::POST('/resource/delete/{id}', 'ResourceController@delete');
	Route::POST('/resource/edit/{id}', 'ResourceController@update');


	//Result Controller
	Route::get('/result/{id}', 'ResultController@index');
	Route::POST('/result/insert/{id}', 'ResultController@save');
	Route::POST('/result/delete/{id}', 'ResultController@delete');
	Route::POST('/result/edit/{id}', 'ResultController@update');

	//Notice Controller
	Route::get('/notice/{id}', 'NoticeController@index');
	Route::POST('/notice/insert/{id}', 'NoticeController@save');
	Route::POST('/notice/delete/{id}', 'NoticeController@delete');
	Route::POST('/notice/edit/{id}', 'NoticeController@update');

	//Curriculum Controller
	Route::get('/curriculum', 'CurriculumController@index');
	Route::get('/curriculum/getpdf/{id}', 'CurriculumController@getPDF');
	Route::POST('/curriculum/insert', 'CurriculumController@save');
	Route::POST('/curriculum/delete', 'CurriculumController@delete');
	Route::POST('/curriculum/edit', 'CurriculumController@update');


	//AdminDesk Controller
	Route::get('/admin_desk', 'AdminDeskController@index');
	Route::POST('/admin_desk/update', 'AdminDeskController@update');
	Route::POST('/admin_desk/delete', 'AdminDeskController@delete');
	Route::POST('/admin_desk/addnew', 'AdminDeskController@addnew');
});