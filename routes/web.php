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
    return view('employee');
});

Route::post('/addimage', 'EmployeeController@store')->name('addimage');

Route::get('/viewdata', 'EmployeeController@display');

Route::get('/editdata/{id}', 'EmployeeController@edit');

Route::put('/updateimage/{id}', 'EmployeeController@update');

Route::get('/deletedata/{id}', 'EmployeeController@delete');

