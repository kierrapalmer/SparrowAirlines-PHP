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



	Route::get('/', [
		'uses' => 'UserController@getIndex',
		'as'   => 'index'
	]);


	Route::get('trip', [
		'uses' => 'SeatController@getTrip',
		'as'   => 'passenger.trip'
	]);

	Route::get('seat', [
		'uses' => 'SeatController@getSeats',
		'as'   => 'passenger.seat'
	]);

	Route::get('seat/assign/{id}/{isOpen}', [
		'uses' => 'SeatController@getAssignSeat',
		'as'   => 'passenger.seat.assign'
	]);

	Route::get('profile', [
		'uses' => 'UserController@getProfileIndex',
		'as'   => 'passenger.profile'
	]);

	Route::post('profile', [
		'uses' => 'UserController@postUserUpdate',
		'as'   => 'passenger.profile.update'
	]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
