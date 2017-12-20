<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Slab" rel="stylesheet"> 

     <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.7.0/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <title></title>
  </head>

  <body>

  
    <nav class="navbar "  style="background-color: #000000;">
      
      <div class="d-flex flex-row justify-content-start">
        <a class=" nav-link text-white" href="#">Locator Jobs </a>
        <a class="nav-link active" href="#">
          <input type="text"  class="form-control " name="" value="" placeholder="buscar servicios ... ">
        </a>  
        <a class="nav-link text-white" href="#">en</a>  
        <a class="nav-link active" href="#">
          <input type="text"  class="form-control " name="" value="" placeholder="  ciudad ... ">
        </a> 
      </div>

      <div class="d-flex flex-row justify-content-end">
          
      @if(!Auth::check())
      <div class=" form-inline ml-auto">

          <a href="{{ asset('login/google/dashboard')}}" class="nav-link text-white ml-auto">Publicar mi trabajo</a>
     
        <a class="nav-link text-white  " data-toggle="modal" id="ini" data-target="#exampleModal" href="#">Iniciar Sesión</a>      

      </div>

        

      @include('login')

      @else

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
  </body>
</html>
