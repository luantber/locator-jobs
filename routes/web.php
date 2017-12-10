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
Route::get('/',function(){
  $trabajos=App\Trabajo::all();
    
  return view('index',["trabajos"=>$trabajos]);
});

Route::get('/mapa', function () {
  $items = Trabajo::distance(10,'45.05,7.6667')->get();  //0.35 es el radio
  //return $items;
  return view('trabajos.map')->with(['items'=>$items,'origin'=>'45.05,7.6667']);

  //return $items;
    
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
