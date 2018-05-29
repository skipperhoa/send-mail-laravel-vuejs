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

Route::group(['prefix'=>'email'],function(){
	Route::get('/form', function () {
	    return view('pages.email');
	});
	Route::get('/success',function(){
		return view('pages.success');
	});
	Route::post('/form','EmailController@store');
});
