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
//index
Route::get('/',function(){
  $trabajos=App\Trabajo::all();
  return view('index',["trabajos"=>$trabajos]);
});

//Auth Google
Route::get('login',function(){
  return view('auth.login');
});


Route::get('login/google', 'Auth\SocialLoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\SocialLoginController@handleProviderCallback');

//Auth
Auth::routes();

// TRABAJADORES
Route::resources([
    'trabajadores' => 'TrabajadorController'
]);

//Trabajos

Route::resources([
    'trabajos' => 'TrabajoController'
]);
// SOLO PARA VISTAS
Route::get ('busqueda',function (){
  return view('busqueda');
});
Route::get('index',function (){
  return view('index');
});

Route::get('logiin',function (){
  return view('login');
});

Route::get('dashboard',function(){
	return view('dashboard');
});
