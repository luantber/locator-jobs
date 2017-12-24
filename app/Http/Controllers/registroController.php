<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class registroController extends Controller
{
    public function registro(Request $request)
    {
      $nuevo = new User;
      $nuevo->nombre = $request->nombre;
      $nuevo->email = $request->email;
      $nuevo->password = encrypt( $request->contrasena);
      $nuevo->telefono = "";
      $nuevo->foto = "";
      $nuevo->monto = 0;

      $nuevo->save();

 return redirect("/");
    }
}
