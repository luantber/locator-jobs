<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;

class SocialLoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
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

        return redirect('/');







        //Auth::login($user, true);
        // $user->token;
        //return redirect('/');
    }
}
