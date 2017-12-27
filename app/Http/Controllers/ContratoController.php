<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events\Mensaje;
use App\Events\UpdateContrato;

use App\Providers\BroadcastServiceProvider;
use App\Contrato;
use App\Trabajo;
use App\Conversacion;

use Auth;
class ContratoController extends Controller
{   


    public function show($id)
    {
    	$contrato = Contrato::find($id);
        //dd($contrato->conversaciones);

        return view('trabajos.contrato',['contrato'=> $contrato , 'conversaciones'=>$contrato->conversaciones    ]);
    }

    public function contratar(Request $request)
    {


        $t = Trabajo::find($request->trabajo);
        $c = new Contrato;

        if($t->contratos()->where('user_id', Auth::id() )->get()->isEmpty()){

            $c->trabajo_id = $t->id;
            $c->trabajador_id  = $t->trabajador_id;
            $c->user_id = Auth::id();
            $c->costo = $t->costo;
            $c->contratado = false;
            $c->pagado = false;
            $c->terminado = false;
            $c->inicio =$request->inicio;
            $c->fin= $request->fin;
            $c->save();
        }
        else{
            $c = $t->contratos()->where('user_id', Auth::id() )->get()->first();
        }

        return redirect(asset('contratos/'.$c->id));
    }

    public function mensaje(Request $request)	
    {
        $c = new Conversacion;
        $c->contrato_id = $request->contrato;
        $c->mensaje  =  $request->mensaje;
        $c->de = Auth::id();
        $c->de_n = Auth::user()->nombre;

        $ct = Contrato::find($request->contrato);

        $c->para = $ct->trabajador_id == Auth::id() ? $ct->user_id : $ct->trabajador_id;

        //dd($ct->trabajador);
        $c->para_n = $ct->trabajador_id == Auth::id() ? $ct->user->nombre : $ct->trabajador->user->nombre; 
        $c->save();

        
    	event(new Mensaje($c));

        return [true];
    }


    public function getmensajes(Request $request){
        $c = Contrato::find($request->contrato);
        //dd($c->conversaciones[0]);
        return $c->conversaciones;
    }

    public function update(Request $request)
    {
        $c = Contrato::find($request->contrato);
        $c->inicio = $request->inicio;
        $c->fin = $request->fin;
        $c->costo = $request->costo;
        $c->total = $request->total;
        $c->dias = $request->dias;
        $c->save();

        event(new UpdateContrato($c));
        return [true];
    }
}
