<?php
use App\Trabajo;
use App\Tag;
use Illuminate\Http\Request;
use App\Mail\Confirmation;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

/*
Route::get('/',function(){
  $trabajos=App\Trabajo::all();

  return view('index',["trabajos"=>$trabajos]);
});
*/

//Index
//Route::get('index',function (){return view('index');});

Route::get('/', 'IndexController@index');
Route::get('index','IndexController@index');


//Social AUTHS
Route::get('login/google/callback', 'Auth\SocialLoginController@handleProviderCallbackG');
Route::get('login/google/{link}', 'Auth\SocialLoginController@redirectToProviderG');
Route::get('login/facebook/callback', 'Auth\SocialLoginController@handleProviderCallbackF');
Route::get('login/facebook/{link}', 'Auth\SocialLoginController@redirectToProviderF');

//Auth
Auth::routes();

//Dashboard
Route::get('dashboard', 'TrabajoController@index')->middleware('auth');
Route::get('trabajo/{id}', 'TrabajoController@index2');


//Contratos
Route::get('contratos/{id}', 'ContratoController@show');
Route::post('contratar','ContratoController@contratar');
Route::post('contrato/update','ContratoController@update');


//Mensajes
Route::post('mensaje','ContratoController@mensaje');
Route::post('getmensajes','ContratoController@getmensajes');
//Route::get('mensaje','ContratoController@mensaje');

// linea del tiempo
Route::get('linea','TrabajoController@linea');

Route::get('publicados','TrabajoController@lineaP');
Route::get('contratados','TrabajoController@lineaC');
Route::get('realizados','TrabajoController@lineaR');


// refgistro
Route::post('registro', 'registroController@registro');


Route::get('mapa', function () {
  $items = Trabajo::distance(0.02,'-16.405782,-71.484242')->get();  //0.35 es el radio
  //return $items;
  return view('trabajos.map')->with(['items'=>$items,'origin'=>'-16.405782, -71.484242']);

  //return $items;

});

// TRABAJADORES
// TRABAJOS
Route::resources([
    'trabajos' => 'TrabajoController',
    'trabajadores' => 'TrabajadorController'
]);

// SOLO PARA VISTAS

Route::match(['get','post'],'buscar', 'TrabajoController@busqueda');
/*Route::get('buscar{page?}',function(Request $request){
  $trabajos=App\Trabajo::paginate();
  //return $request->input("page");
  return $trabajos->render();
});*/
Route::get ('busqueda',function (){
  return view('busqueda');
});

Route::get('test',function (){
  return view('tests.template2');
});


Route::get('/tags',function(){
  $tags=Tag::paginate(24);
  return view('tags',['tags'=>$tags]);
});

Route::get('/tags/{tag}','TrabajoController@busquedaTags');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mail',function(){
  Mail::to('alrus2797@gmail.com')
    ->send(new Confirmation());
});

Route::get('/preview',function(){
  return view('confirmation');
});

Route::get('usuarios/{email}/activar','registroController@activar');
Route::post('/activar','registroController@activarusuario');