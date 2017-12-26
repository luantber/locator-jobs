<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Mensaje;
use App\Providers\BroadcastServiceProvider;
use App\Contrato;
use App\Trabajo;
use Auth;
class ContratoController extends Controller
{
    public function show($id)
    {
    	$contrato = Contrato::find($id);
        return view('trabajos.contrato',['contrato'=> $contrato     ]);
    }

    public function contratar(Request $request)
    {

        $t = Trabajo::find($request->trabajo);
        //dd($t);
        $c = new Contrato;
        $c->trabajo_id = $t->id;
        $c->trabajador_id  = $t->trabajador_id;
        $c->user_id = Auth::id();
        $c->costo = 0;
        $c->contratado = false;
        $c->pagado = false;
        $c->terminado = false;
        $c->save();


        return redirect(asset('contratos/'.$c->id));
    }

    public function mensaje(Request $request)	
    {
    	event(new Mensaje('Hi there Pusher!'));
        return true;
    }
}
