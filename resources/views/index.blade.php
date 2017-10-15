<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bulma.css">

	<title>@yield('titulo')</title>

</head>
<body>

	<nav class="navbar is-light" >
		<div class="navbar-brand ">
			<div class="navbar-item">
					<img src="img/logo.png" style="max-height: 2.5rem">
			</div>
  		</div>

  		<div class="navbar-menu">
  			<div class="navbar-start">
  				<div class="navbar-item">
  					<div class="control has-icons-left">
	  					<input class="input is-medium" type="text" placeholder="Buscar trabajos">
	  					<span class="icon is-small is-left">
						    <i class="fa fa-suitcase" aria-hidden="true"></i>
	    				</span>
	  				</div>
  					
  				</div>
  			</div>


  			<div class="navbar-end">

  				<a class="navbar-item">
  					Publicar Trabajo
  				</a>

  				<a href="" class="navbar-item">
  					Registrarse
  				</a>
  				
  				<a href="" class="navbar-item">
  					Iniciar Sesión
  				</a>

  				<!--
  				<div class="navbar-item has-dropdown">
					<a class="navbar-link">
						Iniciar Sesión
					</a>

					<div class="navbar-dropdown">
						<a class="navbar-item">
							Overview
						</a>
					</div>
				</div>
				-->

  			</div>
  		</div>

  		
	</nav>

	<div class="container" >

		<section class="hero">
			<div class="hero-body">
				<div class="container">
					<h1 class="title">Recomendados para ti</h1>
					<h2 class="subtitle">Creemos que los podrías necesitar</h2>
				</div>
			</div>
		</section>

	</div>


	<div id="aplicacion">
	
   		@yield('body')

	</div>
   



  <script type="text/javascript" src="js/vue.js"></script>

  <script src="jsa/main.js"></script>
</body>
</html>