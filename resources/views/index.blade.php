<!DOCTYPE html>
<html>
<head>
	  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>@yield('titulo')</title>

	<style type="text/css">
		#busqueda{
    		margin-top: 15px;
		    height: 30px;

		}

		input{
			-webkit-border-radius: 50px;
			-moz-border-radius: 50px;
			border-radius: 50px;
		}
		
	</style>
</head>
<body>


	<div id="aplicacion">
	<nav>
		<barra-navegacion>
	</nav>
   		@yield('body')

	</div>
   

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script type="text/javascript" src="js/vue.js"></script>

  <script src="jsa/main.js"></script>
</body>
</html>