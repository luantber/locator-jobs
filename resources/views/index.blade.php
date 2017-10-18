<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/fonts-awesome.min.css">

    <link rel="stylesheet" href="css/bulma.css">

	<title>@yield('titulo')</title>

</head>
<body>
	<div id="aplicacion">

<!--INICIO LOGIN
-->


<div class="modal" v-bind:class="login">
	<div class="modal-background"></div>
	<div class="modal-content">
		<div class="box">
			<i v-on:click="cerrarLogin" class="fa fa-times is-size-4" style="padding-bottom: 10px" aria-hidden="true"></i>
			<h1 class="title is-size-4">Inicia sesión para continuar</h1>
			<div class="field">
				<p class="control has-icons-right">
					<input class="input is-medium" type="email" placeholder="Email">
					
					<span class="icon is-small is-right">
						<i class="fa fa-envelope"></i>
					</span>
				</p>
			</div>

			<div class="field">
				<p class="control has-icons-right">
					<input class="input is-medium" type="password" placeholder="Password">
					<span class="icon is-small is-right">
						<i class="fa fa-lock"></i>
					</span>
				</p>
			</div>

  			<nav class="level">
  				<div class="level-left">
					<label class="checkbox">
					<input type="checkbox">
					Recuerdame
					</label>
  				</div>
  				<div class="level-right">
  					<a href="">Mostrar Contraseña</a>
  				</div>
  			</nav>

  			<div class="columns" style="margin-top: -1.5rem;">
  				<div class="column is-primary" style="padding: 0.65rem;" >
					<div class="notification is-primary has-text-weight-bold has-text-centered">
						Iniciar Sesión
					</div>
  				</div>
			</div>

			<div class="columns has-text-centered has-text-primary" style="margin-top: -1.5rem;">
				<div class="column">
				¿Olvidaste tu contraseña?	
				</div>
			</div>

			<p>No tienes cuenta ? <a href="">Regístrate</a></p>

		</div>
	</div>
	
</div>

<!--
FIN LOGIN
-->
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
  				


  				
  				<div class="navbar-item has-dropdown">
					<a v-on:click="iniciar" class="navbar-link">
						Iniciar Sesión
					</a>

					<div class="navbar-dropdown">
						<a class="navbar-item">
							Overview
						</a>
					</div>
				</div>
				
  			</div>
  		</div>
	</nav>
	
	
	<section class="hero is-primary is-bold">
		<div class="hero-body" style="padding: 2rem 1.5rem;">
			<div class="container">
				<h1 class="title">Recomendados para ti</h1>
				<h2 class="subtitle">Creemos que los podrías necesitar</h2>
			</div>
		</div>
	</section>
	
	
<div class="section">
	<div class="columns is-mobile" >

		<div class="column">
			<div class="card">
			  <div class="card-image">
			    <figure class="image is-16by9">
			      <img src="img/gasfiteria1.jpg" alt="Placeholder image">
			    </figure>
			  </div>
			  <div class="card-content">
			    <div class="media">
			      <div class="media-left">
			        <figure class="image is-48x48">
			          <img src="img/mox.jpg" alt="Placeholder image">
			        </figure>
			      </div>
			      <div class="media-content">
			        <p class="title is-5 ">Gasfiteros Pepito</p>
			        <p class="subtitle is-6"><strong>S/. 45.00 </strong></p>
			      </div>
			    </div>

			    <div class="content is-small is-success">
			    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Phasellus nec iaculis mauris. </p>

			    	<nav class="level">
			    			<div class="level-item has-text-centered">
			    				<div>
	   							    <p class="heading">Estrellas</p>

	      							<p class="has-text-danger">
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      							</p>
	   							 </div>
  			    			</div>

  			    			<div class="level-item has-text-centered">
			    				<div>
	   							    <p class="heading">Calificaciones</p>
	      							<p> <strong>7</strong></p>
	   							 </div>
  			    			</div>		
			    	</nav>

			    	<div class="tags">
				    	<span class="tag is-rounded">Drywall</span>
				    	<span class="tag is-rounded">Construcción</span>
				    	<span class="tag is-rounded">Prefabricado</span>
				    
			    	</div>

			    </div>


			  </div>
			</div>
		</div>

		<div class="column">
			<div class="card">
			  <div class="card-image">
			    <figure class="image is-16by9">
			      <img src="img/drywall.jpg" alt="Placeholder image">
			    </figure>
			  </div>
			  <div class="card-content">
			    <div class="media">
			      <div class="media-left">
			        <figure class="image is-48x48">
			          <img src="img/freddy.jpg" alt="Placeholder image">
			        </figure>
			      </div>
			      <div class="media-content">
			        <p class="title is-5 ">La Solución SAC</p>
			        <p class="subtitle is-6"><strong>S/. 89.00 </strong></p>
			      </div>
			    </div>

			    <div class="content is-small is-success">
			    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Phasellus nec iaculis mauris. </p>

			    	<nav class="level">
			    			<div class="level-item has-text-centered">
			    				<div>
	   							    <p class="heading">Estrellas</p>

	      							<p class="has-text-danger">
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      							</p>
	   							 </div>
  			    			</div>

  			    			<div class="level-item has-text-centered">
			    				<div>
	   							    <p class="heading">Calificaciones</p>
	      							<p> <strong>12</strong></p>
	   							 </div>
  			    			</div>		
			    	</nav>

			    	<div class="tags">
				    	<span class="tag is-rounded">Drywall</span>
				    	<span class="tag is-rounded">Construcción</span>
				    	<span class="tag is-rounded">Prefabricado</span>
				    
			    	</div>

			    </div>


			  </div>
			</div>
		</div>

		<div class="column">
			<div class="card">
			  <div class="card-image">
			    <figure class="image is-16by9">
			      <img src="img/dentista.jpg" alt="Placeholder image">
			    </figure>
			  </div>
			  <div class="card-content">
			    <div class="media">
			      <div class="media-left">
			        <figure class="image is-48x48">
			          <img src="img/ernesto.jpg" alt="Placeholder image">
			        </figure>
			      </div>
			      <div class="media-content">
			        <p class="title is-5 ">Sonrisas</p>
			        <p class="subtitle is-6"><strong>S/. 125.00 </strong></p>
			      </div>
			    </div>

			    <div class="content is-small is-success">
			    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Phasellus nec iaculis mauris. </p>

			    	<nav class="level">
			    			<div class="level-item has-text-centered">
			    				<div>
	   							    <p class="heading">Estrellas</p>

	      							<p class="has-text-danger">
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      							</p>
	   							 </div>
  			    			</div>

  			    			<div class="level-item has-text-centered">
			    				<div>
	   							    <p class="heading">Calificaciones</p>
	      							<p> <strong>12</strong></p>
	   							 </div>
  			    			</div>		
			    	</nav>

			    	<div class="tags">
				    	<span class="tag is-rounded">Drywall</span>
				    	<span class="tag is-rounded">Construcción</span>
				    	<span class="tag is-rounded">Prefabricado</span>
				    
			    	</div>

			    </div>


			  </div>
			</div>
		</div>

		<div class="column">
			<div class="card">
			  <div class="card-image">
			    <figure class="image is-16by9">
			      <img src="img/mecanico.jpg" alt="Placeholder image">
			    </figure>
			  </div>
			  <div class="card-content">
			    <div class="media">
			      <div class="media-left">
			        <figure class="image is-48x48">
			          <img src="img/german.jpg" alt="Placeholder image">
			        </figure>
			      </div>
			      <div class="media-content">
			        <p class="title is-5 ">Mecanico Auto</p>
			        <p class="subtitle is-6"><strong>S/. 89.00 </strong></p>
			      </div>
			    </div>

			    <div class="content is-small is-success">
			    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Phasellus nec iaculis mauris. </p>

			    	<nav class="level">
			    			<div class="level-item has-text-centered">
			    				<div>
	   							    <p class="heading">Estrellas</p>

	      							<p class="has-text-danger">
	      								
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      								<i class="fa fa-star" aria-hidden="true"></i>
	      							</p>
	   							 </div>
  			    			</div>

  			    			<div class="level-item has-text-centered">
			    				<div>
	   							    <p class="heading">Calificaciones</p>
	      							<p> <strong>5</strong></p>
	   							 </div>
  			    			</div>		
			    	</nav>

			    	<div class="tags">
				    	<span class="tag is-rounded">Drywall</span>
				    	<span class="tag is-rounded">Construcción</span>
				    	<span class="tag is-rounded">Prefabricado</span>
				    
			    	</div>

			    </div>


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


</div>
	@yield('body')   

  <script type="text/javascript" src="js/vue.js"></script>

  <script src="jsa/main.js"></script>


</body>
</html>

