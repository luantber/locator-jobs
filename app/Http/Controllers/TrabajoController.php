<?php

namespace App\Http\Controllers;

use App\Trabajo;
use App\User;
use Auth;
use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $trabajos = Auth::user()->trabajador->trabajos;
        //dd($trabajos);
        return view('dashboard', ['trabajos' => $trabajos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       //dd(Auth::user()->trabajador);
       return view('trabajos.crear');
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
        //return dd($request);
        $trabajo= new Trabajo;
        $trabajo->nombre=$request->nombre;
        $trabajo->ubicacion=$request->ubicacion;
        $trabajo->descripcion=$request->descripcion;
        $trabajo->trabajador_id=$request->tra_id;
        $trabajo->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajo $trabajo)
    {
        return view('Trabajos.mostrar',['trabajo'=>$trabajo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajo $trabajo)
    {
        //

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
        $trabajo->ubicacion=$request->ubicacion;
        $trabajo->descripcion=$request->descripcion;
        $trabajo->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trabajo  $trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajo $trabajo)
    {
        //
    }
}
