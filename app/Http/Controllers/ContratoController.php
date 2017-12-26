<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Mensaje;
use App\Providers\BroadcastServiceProvider;

class ContratoController extends Controller
{
    public function show($id)
    {
    	dd($id);
    }

    public function contratar( )
    {
        //dd($request, $id);
        return view('trabajos.contrato');
    }

    public function mensaje(Request $request)	
    {
    	event(new Mensaje('Hi there Pusher!'));
    	//return new BroadcastMessage
    	//dd($request);
    	//return "wep";
    }
}
