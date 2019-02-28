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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HabitsController@index');
//Route::get('/create', 'HabitsController@create');

Route::resource('habits', 'HabitsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
