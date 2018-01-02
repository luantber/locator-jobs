<?php

namespace App\Http\Controllers;

use DB;
use App\Trabajo;
use App\Trabajador;
use App\Contrato;
use App\User;
use App\Foto;
use Auth;
use Illuminate\Http\Request;
use App\Tag;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $trabajos  = [];

        if(Auth::user()->trabajador){
            $trabajos = Auth::user()->trabajador->trabajos;
            //dd($trabajos);
            return view('dashboard.dashboard', ['trabajos' => $trabajos]);
        }
        return view('dashboard.dashboard', ['trabajos' => $trabajos]);
    }


    public function getTrabajo(Request $request)
    {
        //$trabajos= DB::table('trabajos')->select(DB::raw('id, nombre, asText(location), descripcion'))
        //->where('nombre','like','%asd%')
        //->where()
        //->get();
        $trabajos= Trabajo::distance(0.02,$request->pos)->where('nombre','like','%'.$request->nombre.'%')->get();
    }

    public function busqueda(Request $request)
    {
        //return $request->pos;

        if ($request->pos)
        {
            $trabajos= Trabajo::distance(0.04,$request->pos)->where('nombre','like','%'.$request->data.'%')->paginate(6);
            //return $trabajos;
            $trabs=$trabajos->chunk(2);
            //return ;

            //return $trabs;
            /*
            foreach($trabs as $trab){
                foreach($trab as $t){
                    print($t);
                }
            }
            return;*/
            return view('busqueda',["data"=>$request->data,'origen'=>$request->pos,"trabajos"=>$trabajos,'trabs'=>$trabs]);
        }
        else
        {
            $trabajos=Trabajo::where('nombre','like','%'.$request->data.'%')->paginate(6);
            //$trabs=$trabajos->chunk(2);

            /*
            foreach($trabajos->chunk(2) as $trab){
                foreach($trab as $t){
                    if (isset($t->fotos))
                    {
                        print($t->fotos);
                    }
                    else
                        print("asd");
                }
            }

            return;*/
            return view('busqueda',["data"=>$request->data,'trabajos'=>$trabajos,'trabs'=>$trabajos]);
        }
    }

    public function busquedaTags($tag){
    
        $tag_act = Tag::where('nombre','=',$tag)->with('trabajos')->first();
        
        //return dd($tag_act);
        $tags = Tag::where('nombre','like','%'.$tag.'%');
        $trabajos=$tag_act->trabajos()->paginate(6);
        //$trabajos=DB::table('tag_trabajo')->join('trabajos','trabajos.id','=','trabajo_id')->where('tag_id','=',16)->paginate(6);
        //DB::table('trabajos')->join('tags')
        //return dd($trabajos);
        return view('busqueda', ['trabajos'=>$trabajos,'data'=>$tag]);
    }

    /**
     * Muestra el trabajo solicitado
     *
     */

    public function index2($id)
    {

        $t = Trabajo::find($id);
        //dd($t->location);

        //dd($t);
        return view('dashboard.trabajosForm', ['t' => $t]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       //dd(Auth::user()->trabajador);
       return view('dashboard.trabajosFormNew');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        //
        //dd($request);
        //return dd(explode(',',$request->tags));-



        $trabajo= new Trabajo;
        $trabajo->nombre=$request->nombre;
        $trabajo->costoMax=$request->costoMax;
        $trabajo->costoMin=$request->costoMin;
        $trabajo->location=$request->location;
        $trabajo->direccion=$request->direccion;
        $trabajo->descripcion=$request->descripcion;
        $trabajo->trabajador_id=Auth::user()->trabajador->id;
        $trabajo->mostrar = true;
        $trabajo->save();

        $tags=explode(',',$request->tags);
        $tag_temp=null;
        foreach($tags as $tag){
            $tag_temp=Tag::firstOrCreate(['nombre'=>$tag]);
            $trabajo->tags()->save($tag_temp);
        }

        $fun =  function ($val){
            return (array)$val;
        };

        if(!is_null($request->fotos)){
            $fs = json_decode($request->fotos);
            $fsa = array_map($fun , $fs);


            //dd($fs);
            //print_r($fsa);
            //dd($fsa);
            $comment = $trabajo->fotos()->createMany($fsa);
        }


        return redirect("linea");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajo $trabajo)
    {
//      dd($trabajo->trabajador_id->descripcion);
        $trabajador = Trabajador::find($trabajo->trabajador_id);


        $user = User::find($trabajador->user_id);
        $fotos = DB::table('fotos_trabajos')
                ->where('trabajo_id', $trabajo->id)
                ->get();



            //    dd(sizeof($fotos));

        //dd($trabajador->user_id);
        return view('trabajos.mostrar',['trabajo'=>$trabajo, 'trabajador'=> $trabajador,'user'=>$user,'fotos'=>$fotos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajo $trabajo)
    {
        return view('trabajos.editar',["t"=>$trabajo]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajo $trabajo)
    {
        $trabajo->nombre=$request->nombre;
  //      $trabajo->ubicacion=$request->ubicacion;
        $trabajo->descripcion=$request->descripcion;
        $trabajo->direccion = $request->direccion;
        $trabajo->costoMax = $request->costoMax;
        $trabajo->costoMin = $request->costoMin;
        $trabajo->save();
        //dd($trabajo);
        return redirect ("linea");
    //  return ["trabajo"=>$request];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajo $trabajo)
    {
//      $trabajo->delete();
        return ["Eliminado"];
    }


    public function linea()
    {
       return view('linea.linea');
    }


    public function lineaP()
    {
      $trabajador =  Auth::user()->trabajador;

      $trabajos = $trabajador->trabajos;
    //  dd($trabajos[0]->tags);

      $fotos =  array();
      foreach ($trabajos as $trabajo) {
        $new = DB::table('fotos_trabajos')
              ->where('trabajo_id',$trabajo->id)
              ->orderBy('created_at', 'desc')
              ->get();
              array_unshift($fotos,$new[0]);
        }
        //dd($fotos);
      $trabajosP = DB::table('trabajos')
              ->where('trabajador_id', $trabajador->id)
              ->orderBy('created_at', 'desc')
              ->get();
//              dd($trabajosP[0]->created_at);
      $fechas=array();
      $fechas2 = array();
      foreach ($trabajosP as $trabajo) {
        array_push($fechas,$trabajo->created_at);
      }
      foreach ($fechas as $fecha) {
        $porciones = explode(" ",$fecha);
        $porciones[1] = substr($porciones[1], 0, -3);
        array_push($fechas2,$porciones);
      }
      return view('linea.lineaP',["trabajador"=>$trabajador,"trabajos"=>$trabajosP,"fechas"=>$fechas2,"fotos"=>$fotos, "t"=>$trabajos]);

    }





    public function lineaC()
    {
      //trabajos Contratados
      $user = Auth::user();
      $contratos = array();
      foreach ($user->contratos as $contrato) {
        array_unshift($contratos,$contrato);
      }

      $fechas=array();
      $fechas2 = array();
      foreach ($contratos as $contrato) {
        array_push($fechas,$contrato->created_at);
      }
      foreach ($fechas as $fecha) {
        $porciones = explode(" ",$fecha);
        $porciones[1] = substr($porciones[1], 0, -3);
        array_push($fechas2,$porciones);
      }
      //dd($contratos[0]->costo);
      /*
      $trabajosC = DB::table('contratos')
              ->where('user_id', $userC->id)
              ->orderBy('created_at', 'desc')
              ->get();
    $trabajos = $userC->contratos;
    dd($trabajos);


*/
      if (sizeof($contratos)!=0) {
        return view('linea.lineaC',['contratos'=>$contratos,'fechas'=>$fechas2,"bool"=>true]);
      }
      else {
        return view('linea.lineaC',['bool'=>false]);
      }
    }




    public function lineaR(){
      $trabajador =  Auth::user()->trabajador;
      //datos como inicio fin etc

      $contratosR = DB::table('contratos')
              ->where('trabajador_id', $trabajador->id)
              ->orderBy('created_at', 'desc')
              ->get();

      //para las fotos
      $fotos =  array();
      foreach ($trabajador->contratos as $contrato) {
        array_unshift($fotos,$contrato->trabajo->fotos[0]);
      }
//      dd($fotos[0]->miniatura);
      //para el orden
      $trabajos = array();
      foreach ($contratosR as $contrato) {
        $trabajoSolo = DB::table('trabajos')
                ->where('id', $contrato->trabajo_id)
                ->get();
        array_push($trabajos,$trabajoSolo[0]);
      }

      $fechas=array();
      $fechas2 = array();
      foreach ($contratosR as $contrato) {
        array_push($fechas,$contrato->created_at);
      }
      foreach ($fechas as $fecha) {
        $porciones = explode(" ",$fecha);
        $porciones[1] = substr($porciones[1], 0, -3);
        array_push($fechas2,$porciones);
      }


      return view('linea.lineaR',["fechas"=>$fechas2,"trabajos"=>$trabajos,"contratos"=>$contratosR,'trabajador'=>$trabajador,'fotos'=>$fotos]);
    }
}
