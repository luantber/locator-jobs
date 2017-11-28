<?php

namespace App\Http\Controllers;

use App\User;

use App\Trabajador;
use Illuminate\Http\Request;
use Auth;

class TrabajadorController extends Controller
{
    public function index()
    {
//      return view('trabajadores.');
    }
    public function create()
    {
      return view('trabajadores.crear');
    }
    public function store(Request $request)
    {
      $nuevo = new Trabajador;
      $nuevo->user_id=$request->user_id;
      $nuevo->dni=$request->dni;
      $nuevo->descripcion=$request->descr;

      $nuevo->save();

      return redirect("trabajos/create");


    }
    public function show(Trabajador $trabajador)
    {
      //
    }
    public function edit(Trabajador $trabajador)
    {
        //
    }
    public function update(Request $request, Trabajador $trabajador)
    {
        //
    }
    public function destroy(Trabajador $trabajador)
    {
        //
    }
}
