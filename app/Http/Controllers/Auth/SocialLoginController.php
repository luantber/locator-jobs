<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Socialite;
use Session;
use App\User;

class SocialLoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProviderG($link)
    {
        Session::flash('url',$link);
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallbackG()
    {
        $user = Socialite::driver('google')->user();

        //dd($user);
        //User::find(1);

        $usuario = User::where('email', $user->email)->first();

        if(!$usuario){
          $usuario = new User;
          $usuario->email = $user->email;
          $usuario->nombre = $user->name;
          $usuario->password = bcrypt(str_random(10));
          $usuario->monto = 0;
          $usuario->foto = $user->avatar;
          $usuario->telefono = 0;
          $usuario->save();
        }

        Auth::login($usuario, true);

        if (Session::get('url')){
            return redirect( Session::get('url') );
        }

        dd(Session::get('url'));

    }

        
    public function redirectToProviderF($link)
    {
        Session::flash('url',$link);
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallbackF()
    {
        $user = Socialite::driver('facebook')->user();

        //dd($user);
        //User::find(1);

        $usuario = User::where('email', $user->email)->first();

        if(!$usuario){
          $usuario = new User;
          $usuario->email = $user->email;
          $usuario->nombre = $user->name;
          $usuario->password = bcrypt(str_random(10));
          $usuario->monto = 0;
          $usuario->foto = $user->avatar;
          $usuario->telefono = 0;
          $usuario->save();
        }

        Auth::login($usuario, true);

        if (Session::get('url')){
            return redirect( Session::get('url') );
        }

        dd(Session::get('url'));

    }
}
