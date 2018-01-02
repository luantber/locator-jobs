<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Confirmation;
use Mail;
use App\User;

class registroController extends Controller
{
    public function registro(Request $request)
    {
      $nuevo = new User;
      $nuevo->nombre = $request->nombre;
      $nuevo->email = $request->email;
      //$nuevo->password = bcrypt( $request->contrasena);
      $nuevo->password = bcrypt('123');
      $nuevo->telefono = "";
      $nuevo->foto = "";
      $nuevo->monto = 0;

      $nuevo->save();
      Mail::to($request->email)->send(new Confirmation($nuevo));
    
    return redirect("/");
    }

    public function activar($email)
    {
        $user = User::where('email','=',$email)->first();
        if ($user->activo==0)
            return view('auth.activar',['nombre'=>$user->nombre,'id'=>$user->id,'email'=>$email]);
        return redirect('/');
    }

    public function activarusuario(Request $request)
    {
        $user= User::find($request->id);
        if ($user->email==$request->email){
            $user->password = bcrypt($request->contrasena);
            $user->activo=1;
            $user->save();
            return redirect('/');
        }
        else{
            return redirect('/');
        }
    }
}
