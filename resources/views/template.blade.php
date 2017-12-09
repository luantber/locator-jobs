<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <nav class="navbar "  style="background-color: #000000;">
      <a class=" nav-link text-white" href="#">Locator Jobs </a>
      <a class="nav-link active" href="#">
        <input type="text"  class="form-control " name="" value="" placeholder="buscar servicios ... ">
    </a>

      <a class="nav-link text-white" href="#">en</a>
      <a class="nav-link active" href="#">
        <input type="text"  class="form-control " name="" value="" placeholder="ciudad ... ">
    </a>
      <a class="nav-link text-white  ml-auto" href="#">Iniciar Sesión</a>

    </nav>
    @yield('body')

  <footer style="background-color:#4d4d4d ;">
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
