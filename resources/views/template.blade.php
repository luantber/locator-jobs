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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tag-editor/1.0.20/jquery.tag-editor.min.css" />
  
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/caret/1.0.0/jquery.caret.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tag-editor/1.0.20/jquery.tag-editor.min.js"></script>

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

  <style type="text/css">
    
    body{
      background-color: #e6e6e6;
    }
  </style>

    <nav class="navbar " style="background-color: #000000;">

      <div class="d-flex flex-row justify-content-start">
     <a class="navbar-brand" href="#"> <img src="{{asset('img/logo2.png')}}"
          height="30" alt=""></a>

      <form action="/buscar" id="bus-form" method="POST">
        {{csrf_field()}}
        <input type="text"  id="bus" class="form-control " name="data" placeholder="Buscar Servicios ... ">
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


  <footer   style="background-color:#4d4d4d ;">
    <br>
    <div class="container">
      <div class="row">

        <div class="col-2">
          <div class="btn-group">
            <button type="button" style="background-color:#ffffff;" class="btn  dropdown-toggle" data-toggle="dropdown" >Seleccionar </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
            </div>
          </div>
        </div>

        <div class="col text-white">
          Moneda
       </div>
       <div class="col text-white">
         Mapa del sitio
       </div>

      </div>

      <br>
      <div class="row">

        <div class="col-2">
          <div class="btn-group">
            <button type="button" style="background-color:#ffffff;" class="btn dropdown-toggle" data-toggle="dropdown" >Seleccionar </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
            </div>
          </div>
        </div>

        <div class="col text-white">
          Idioma
        </div>
        <div class="col text-white">
          Mapa del sitio
        </div>
      </div>

      <br>
      <p class="text-white">Universidad Nacional de San Agustin @ Todos los derechos reservados</p>
  </div>

  </footer>

  <script>
      var pos;
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      });
    }

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
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoBFga8LNUmtcWwHs4BzlKLB-aJIhqOuc">
  </script>

  </body>
</html>
