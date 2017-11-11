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

Route::get('login/google', 'Auth\SocialLoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\SocialLoginController@handleProviderCallback');

Route::get('/',function(){
	return view('index');
});

Route::get('/loogin',function(){
	return view('login');
});

Route::post('login2',function(Request $request){
	dd($request->email);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
