<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/orgs', function(){
	return view('orgs');
});

Route::get('/calendar', function(){
	return view('calendar');
});

Route::get('/events', function(){
	return view('events');
});

Route::get('/local', function(){
	return view('local');
});

Route::get('/sustainability', function(){
	return view('sustainability');
});

Route::get('/discussion', function(){
	return view('discussion');
});

Route::resource('orgs', 'OrgController');
Auth::routes();

Route::get('/home', 'HomeController@index');
