<?php
use App\Trabajo;
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
/*
Route::get('/',function(){
  $trabajos=App\Trabajo::all();
    
  return view('index',["trabajos"=>$trabajos]);
});
*/

//Index
Route::get('index',function (){
  return view('index');
});
Route::get('/',function (){
  return view('index');
});

//Auth Google
Route::get('login/google/callback', 'Auth\SocialLoginController@handleProviderCallback');
Route::get('login/google/{link}', 'Auth\SocialLoginController@redirectToProvider');

//Auth
Auth::routes();



Route::get('mapa', function () {
  $items = Trabajo::distance(10,'45.05,7.6667')->get();  //0.35 es el radio
  //return $items;
  return view('trabajos.map')->with(['items'=>$items,'origin'=>'45.05,7.6667']);

  //return $items;
    
});






// TRABAJADORES
// TRABAJOS
Route::resources([
    'trabajos' => 'TrabajoController',
    'trabajadores' => 'TrabajadorController'
]);

// SOLO PARA VISTAS
Route::get ('busqueda',function (){
  return view('busqueda');
});

Route::get('dashboard',function(){
	return view('dashboard');
});
