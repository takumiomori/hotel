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

Route::get('guest', 'GuestController@index')->middleware('auth');
Route::get('guest/add', 'GuestController@add');
Route::post('guest/add', 'GuestController@create');

Route::get('room_category', 'RoomCategoryController@index')->middleware('auth');

Route::get('room', 'RoomController@index')->middleware('auth');
Route::get('room/find', 'RoomController@find');
Route::post('room/find', 'RoomController@search');

Route::get('reservation', 'ReservationController@index')->middleware('auth');
Route::get('reservation/add', 'ReservationController@add');
Route::post('reservation/add', 'ReservationController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/auth', 'LoginController@getAuth');
Route::post('login/auth', 'LoginController@postAuth');
