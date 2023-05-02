<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('course','App\Http\Controllers\CourseController@index')->name('course');
Route::get('courseınsert','App\Http\Controllers\CourseController@courseınsert')->name('courseınsert');
Route::get('courseUpdate/{id}','App\Http\Controllers\CourseController@courseUpdate')->name('courseUpdate');
Route::post('courseInsert','App\Http\Controllers\CourseController@courseInsert')->name('courseInsert');
Route::post('courseUpdatePost/{id}','App\Http\Controllers\CourseController@courseUpdatePost')->name('courseUpdatePost');
Route::get('courseDelete/{id}','App\Http\Controllers\CourseController@courseDelete')->name('courseDelete');
