<?php

namespace App\Http\Controllers;

use App\Trabajo;
use App\Tag;
use Auth;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$trabajos= Trabajo::paginate(12);
		  
		$tags= Tag::take(24)->get();


		//dd($c_user, $c_trabajador);

		return view('index',['trabajos'=>$trabajos,'tags'=>$tags]);
    }
}
