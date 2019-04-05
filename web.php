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

Route::get('/home','practiceController@homepage'); 
Route::get('/addForm','practiceController@addForm'); 
Route::post('/insertdata','practiceController@insertdata'); 
Route::get('/addTeacher','practiceController@addTeacher'); 
Route::post('/addTeacher','practiceController@teachersData'); 
Route::get('/std_view','practiceController@std_view'); 
Route::post('/std_view','practiceController@search'); 
Route::get('/std_view/{id}','practiceController@deleteData'); 
Route::get('/update_page/{id}','practiceController@update_page'); 
Route::post('/update_page/{id}','practiceController@update_data'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
