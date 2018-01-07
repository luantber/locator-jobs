<?php 
    
    if(Auth::check()){

        $c_user = collect([]);
        $c_trabajador = collect([]);
        if(is_null(Auth::user()->trabajador))
          $c_user = Auth::user()->contratos;
        else{

          $c_user = Auth::user()->contratos; 
          $c_trabajador = Auth::user()->trabajador->contratos ;
        }
      
    }



 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <title>Locator Jobs</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
     <!--<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab" rel="stylesheet">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    @yield('scripts')



		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Blueprint: Vertical Timeline" />
		<meta name="keywords" content="timeline, vertical, layout, style, component, web development, template, responsive" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">


		<link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
		<script src="{{asset('js/modernizr.custom.js')}}"></script>





    <title></title>
  </head>


  <body>

  <script type="text/javascript">

      var start = function(){}; // esta es para iniciar cualquier otra funcion despues de cargar la api de google 
  </script>

   

  <style type="text/css">

  </style>

    <nav class="navbar" style="background-color:#134969 ;">

      <!--#2874a0
      #60a3d1;
    -->

      <div class="d-flex flex-row justify-content-start">
     <a class="navbar-brand" href="/"> <img src="{{asset('img/logo3.png')}}"
          height="30" alt=""></a>
<style media="screen">

    #searchbar{
      background-color: #60a3d1;

      border: none;
      width: 380px;
      height: 35px;
      border-radius: 15px;
      margin-left: 50px;
      padding-left: 10px;
      margin-top: 4px;
      color: #FFFFFF;
    }

    #searchbar::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: #FFFFFF;
  }

  #searchbar::-moz-placeholder { /* Firefox 19+ */
      color: #FFFFFF;
  }

  img.recortar{
    height: 130px;
    object-fit:cover;
  }
  img.perfil{
    height: 75px;
    width: 75px;
  }
  a.nlink{
    color :#289bdf;
  }


</style>
      <form action="/buscar" id="bus-form" method="POST">
        {{csrf_field()}}
        <input type="" name="data" id="searchbar" placeholder="Busca servicios o negocios ...">
        <input type="hidden" >

      </form>

      </div>

      <div class="d-flex flex-row justify-content-end">

      @if(!Auth::check())
      <div class=" form-inline ml-auto">

          <a href="{{ asset('login/google/dashboard')}}" class="nav-link text-white ml-auto">Publicar mi trabajo</a>


        <a class="nav-link text-white  " data-toggle="modal" id="ini" data-target="#exampleModal" href="#">Iniciar Sesión</a>
        <a class="nav-link text-white  " data-toggle="modal" id="ini" data-target="#exampleModal2" href="#">Registrarme</a>
      </div>
      @include('login')
      @include('auth.register')

      @else
      <div class="form-inline">
        <a href="{{ asset('linea') }}" class="nav-link text-white ml-auto">Linea del tiempo</a>
      </div>

       <div class="dropdown nav-item ml-auto">
        <a class="nav-link text-white ml-auto dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recientes
        </a>

        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          @for ($i = 0; $i <= 2 && $i < $c_trabajador->count() ; $i++)
            <a class="dropdown-item" href="{{ asset( 'contratos/' .$c_trabajador[$i]->id ) }}">
            {{ $c_trabajador[$i]->trabajo->nombre }}, 
            
            {{ date_format(date_create($c_trabajador[$i]->created_at),"d M")}}

            </a>
          @endfor

          <div class="dropdown-divider"></div>
           @for ($i = 0; $i <= 2 && $i < $c_user->count() ; $i++)
            <a class="dropdown-item" href="{{ asset( 'contratos/' .$c_user[$i]->id ) }}">
            {{ $c_user[$i]->trabajo->nombre }}, 
             {{ date_format(date_create($c_user[$i]->created_at),"d M")}}
            </a>
          @endfor
        </div>
      </div>

      <div class="form-inline">
        <a href="{{ asset('dashboard') }}" class="nav-link text-white ml-auto">Publicar mi trabajo</a>
      </div>




      <div class="dropdown nav-item ml-auto">
        <a class="nav-link text-white ml-auto dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Auth::user()->nombre}}
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                   Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
      </div>


      @endif
      </div>
    </nav>
    


    @yield('body')


  <footer   >
      <p class="text-center"> <b> Universidad Nacional de San Agustin @ Todos los derechos reservados</b> </p>
  </footer>

  <script>
      var pos;
      var error_getLocation=false;

     $(document).ready(function(){

            if (navigator.geolocation) {

              navigator.geolocation.getCurrentPosition(

                function(position) {
                    pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                }, 


                function showError(error) {
                    error_getLocation = true;
                    switch(error.code) {
                        case error.PERMISSION_DENIED:
                            console.log("User denied the request for Geolocation.");
                            break;
                        case error.POSITION_UNAVAILABLE:
                            console.log("Location information is unavailable.");
                            break;
                        case error.TIMEOUT:
                            console.log("The request to get user location timed out.");
                            break;
                        case error.UNKNOWN_ERROR:
                            console.log("An unknown error occurred.");
                            break;
                    }
                    pos = new google.maps.LatLng(-12.051332, -77.039841);

                  });

          }
      });

      $("#bus").on('keyup', function (e) {
        if (e.keyCode == 13) {
          //alert("asd");
          pos=pos.toString().slice(1,-1)
          $("<input>").attr("type", "hidden").attr("name", "pos").attr("id","pos").val(pos).appendTo('#bus-form');
          alert($("#pos").val());
          $("#bus-form").submit();
        }
        });


  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoBFga8LNUmtcWwHs4BzlKLB-aJIhqOuc&callback=start">
  </script>

  </body>
</html>
