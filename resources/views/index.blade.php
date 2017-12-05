@extends('layouts.app2')

@section('content')

	<section class="hero is-primary is-bold">
		<div class="hero-body" style="padding: 2rem 1.5rem;">
			<div class="container">
				<h1 class="title">Recomendados para ti</h1>
				<h2 class="subtitle">Creemos que los podrías necesitar</h2>
			</div>
		</div>
	</section>


<div class="section">
	<div class="columns is-multiline is-mobile" >

@foreach($trabajos as $trabajo)
		<div class="column is-one-quarter">
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
			        <p class="title is-5 ">{{$trabajo->nombre}}</p>
			        <p class="subtitle is-6"><strong>S/. 45.00 </strong></p>
			      </div>
			    </div>

			    <div class="content is-small is-success">
			    	<p>{{$trabajo->descripcion}}</p>

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
@endforeach

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

@endsection
