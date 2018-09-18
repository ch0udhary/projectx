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

Route::get('/register','RegistrationController@register');

Route::post('/register','RegistrationController@savedata');

Route::get('/login','LoginController@user');

Route::post('/login', 'LoginController@userlogin');

Route::get('/admin', function() {
	return view('admin.dashboard');
});


Route::resource('/admin/industries','IndustriesController');

Route::resource('/admin/industries/subindustries','SubindustriesController');