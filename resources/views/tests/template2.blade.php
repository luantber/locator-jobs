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

  <style type="text/css">

  	body{
  		font-family: 'Roboto Slab', serif;
  	}

  	#barra{
  		background: linear-gradient(to right, #9300DE,  #C683E9 , #9300DE);
  		height: 65px;
  	}

  	#searchbar{
  		background-color: #AB62D1;
  		border: none;
  		width: 380px;
  		height: 35px;
  		border-radius: 15px;
  		margin-left: 50px;
  		padding-left: 10px;
  		color: #FFFFFF;
  	}

  	#searchbar::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  		color: #FFFFFF;
	}

	#searchbar::-moz-placeholder { /* Firefox 19+ */
  		color: #FFFFFF;
	}

  </style>


  	<nav class="navbar d-flex align-items-center text-light"  id="barra">
  		<div class="d-flex justify-content-end">
  			<h4>Locator Jobs</h4>
  			<input type="" name="" id="searchbar" placeholder="Busca servicios o negocios ...">
  		</div>

  		
  		<div class="d-flex justify-content-end">
  			<div class="mx-3">Dashboard</div>
  			<div class="mx-3">Publicar Trabajo</div>
  			<div class="mx-3">Iniciar Sesión</div>
  		</div>

  	</nav>

  <style type="text/css">

  	body{
  		font-family: 'Roboto Slab', serif;
  	}

  	#barra2{
  		background: #FFFFFF;
  		height: 65px;
  	}

  	#searchbar2{
  		background-color: #F9F1FF;
  		border: none;
  		width: 380px;
  		height: 35px;
  		border-radius: 15px;
  		margin-left: 50px;
  		padding-left: 10px;
  		/*color: #9300DE;*/
  	}

  	#searchbar2::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  		color: #A889B7;
	}

	#searchbar2::-moz-placeholder { /* Firefox 19+ */
  		color: #A889B7;
	}

  </style>
	<nav class="navbar d-flex align-items-center"  id="barra2">
  		<div class="d-flex justify-content-end">
  			<h4>Locator Jobs</h4>
  			<input type="" name="" id="searchbar2" placeholder="Busca servicios o negocios ...">
  		</div>

  		
  		<div class="d-flex justify-content-end">
  			<div class="mx-3">Dashboard</div>
  			<div class="mx-3">Publicar Trabajo</div>
  			<div class="mx-3">Iniciar Sesión</div>
  		</div>

  	</nav>
  
     @yield('body')
  </body>
</html>
