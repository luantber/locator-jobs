<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Mensaje;
use App\Providers\BroadcastServiceProvider;
use App\Contrato;

class ContratoController extends Controller
{
    public function show($id)
    {
    	$contrato = Contrato::find($id);
        return view('trabajos.contrato',['contrato'=> $contrato     ]);
    }

    public function contratar(Request $request)
    {
        $c = new Contrato;
        $c->trabajo_id = $request->trabajo;
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
