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

	<section class="hero is-primary is-bold">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">Recomendados para ti</h1>
				<h2 class="subtitle">Creemos que los podrías necesitar</h2>
			</div>
		</div>
	</section>

	<br>

	<div class="columns container is-fluid"">

		<div class="column is-one-quarter">
			<div class="card">
			  <div class="card-image">
			    <figure class="image is-4by3">
			      <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
			    </figure>
			  </div>
			  <div class="card-content">
			    <div class="media">
			      <div class="media-left">
			        <figure class="image is-48x48">
			          <img src="http://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
			        </figure>
			      </div>
			      <div class="media-content">
			        <p class="title is-4">John Smith</p>
			        <p class="subtitle is-6">@johnsmith</p>
			      </div>
			    </div>

			    <div class="content">
			      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			      Phasellus nec iaculis mauris. <a>@bulmaio</a>.
			      <a href="#">#css</a> <a href="#">#responsive</a>
			      <br>
			      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
			    </div>
			  </div>
			</div>
		</div>

				<div class="column is-one-quarter">
			<div class="card">
			  <div class="card-image">
			    <figure class="image is-4by3">
			      <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
			    </figure>
			  </div>
			  <div class="card-content">
			    <div class="media">
			      <div class="media-left">
			        <figure class="image is-48x48">
			          <img src="http://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
			        </figure>
			      </div>
			      <div class="media-content">
			        <p class="title is-4">John Smith</p>
			        <p class="subtitle is-6">@johnsmith</p>
			      </div>
			    </div>

			    <div class="content">
			      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			      Phasellus nec iaculis mauris. <a>@bulmaio</a>.
			      <a href="#">#css</a> <a href="#">#responsive</a>
			      <br>
			      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
			    </div>
			  </div>
			</div>
		</div>

				<div class="column is-one-quarter">
			<div class="card">
			  <div class="card-image">
			    <figure class="image is-4by3">
			      <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
			    </figure>
			  </div>
			  <div class="card-content">
			    <div class="media">
			      <div class="media-left">
			        <figure class="image is-48x48">
			          <img src="http://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
			        </figure>
			      </div>
			      <div class="media-content">
			        <p class="title is-4">John Smith</p>
			        <p class="subtitle is-6">@johnsmith</p>
			      </div>
			    </div>

			    <div class="content">
			      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			      Phasellus nec iaculis mauris. <a>@bulmaio</a>.
			      <a href="#">#css</a> <a href="#">#responsive</a>
			      <br>
			      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
			    </div>
			  </div>
			</div>
		</div>

				<div class="column is-one-quarter">
			<div class="card">
			  <div class="card-image">
			    <figure class="image is-4by3">
			      <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
			    </figure>
			  </div>
			  <div class="card-content">
			    <div class="media">
			      <div class="media-left">
			        <figure class="image is-48x48">
			          <img src="http://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
			        </figure>
			      </div>
			      <div class="media-content">
			        <p class="title is-4">John Smith</p>
			        <p class="subtitle is-6">@johnsmith</p>
			      </div>
			    </div>

			    <div class="content">
			      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			      Phasellus nec iaculis mauris. <a>@bulmaio</a>.
			      <a href="#">#css</a> <a href="#">#responsive</a>
			      <br>
			      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
			    </div>
			  </div>
			</div>
		</div>
	</div>


	<div class="tabs">
		<ul>
			<li class="is-active"><a>Pictures</a></li>
			<li><a>Music</a></li>
			<li><a>Videos</a></li>
			<li><a>Documents</a></li>
		</ul>
	</div>

	<section class="hero is-success is-bold">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">Los mejores del mes</h1>
				<h2 class="subtitle">Nuestros mejores trabajadores a tu servicio</h2>
			</div>
		</div>
	</section>


	@yield('body')   



  <script type="text/javascript" src="js/vue.js"></script>

  <script src="jsa/main.js"></script>
</body>
</html>