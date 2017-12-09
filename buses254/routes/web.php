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
	'as' => 'splash',
	'uses' => 'PagesController@splash'
	]);



Auth::routes();

Route::get('/home',
 'HomeController@index')->name('home');


Route::get('/about_us',
    'PagesController@aboutUs'
	);


Route::get('/buscomp_dashboard',
    'PagesController@buscompDashboard'
	);

Route::post('/pass_reg' , 'android_passController@pass_registration');


//CRUD resource controllers

Route::resource('b_details', 'b_detailsController');

Route::resource('b_schedule', 'b_scheduleController');

Route::resource('android_register', 'android_register');




?>