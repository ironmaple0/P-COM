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
Route::get('ownerinfo','OwnerController@create');
Route::post('user_page','OwnerController@store');
Route::get('index','OwnerController@index');
Route::post('search','SearchController@index');
Route::get('/show/{owner_id}','SearchController@show')->name('syousai');
Route::get('chat','ChatController@index');
Route::post('/add', 'ChatController@add')->name('add');
Route::get('/result/ajax', 'ChatController@getData');