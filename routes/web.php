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


Route::get('asdf','TrabajoController@index');

// TRABAJADORES

Route::resources([
    'trabajadores' => 'TrabajadorController'
]);


//Trabajos

Route::resources([
    'trabajos' => 'TrabajoController'
]);
//Route::apiResource('trabajadores', 'TrabajadorController');
// FINAL





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
//Route::post('/register2','RegisterController@create2');
Route::get('/home', 'HomeController@index')->name('home');
