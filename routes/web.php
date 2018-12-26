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
Route::post('/data_save' ,'datasubmitcontroller@create');
Route::get('/view_table' ,'datasubmitcontroller@index');
Route::get('/delete_student/{id}' ,'datasubmitcontroller@destroy');
Route::get('/update_student/{id}' ,'datasubmitcontroller@edit');
Route::post('/update_student_details/{id}' ,'datasubmitcontroller@update');