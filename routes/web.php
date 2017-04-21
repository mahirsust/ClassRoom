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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

//Routine Controller
Route::get('/routine/{id}', 'RoutineController@index');

//Resource Controller
Route::get('/resource/{id}', 'ResourceController@index');
Route::POST('/resource/{id}', 'ResourceController@save');
Route::POST('/deleteit', 'ResourceController@delete');
Route::POST('/resource_updateit', 'ResourceController@update');

//Result Controller
Route::get('/result/{id}', 'ResultController@index');
Route::POST('/result/{id}', 'ResultController@save');
Route::POST('/deleteit', 'ResultController@delete');
Route::POST('/updateit', 'ResultController@update');